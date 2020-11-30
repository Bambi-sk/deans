<?php

namespace App\Http\Controllers;

use App\Models\Faqs;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $faqs = Faqs::all();

        return view('faqs.index', compact('faqs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('faqs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $faq=new Faqs();
        $faq->question = $request->question;
        
        $faq->answer = $request->answer;
        $faq->save();
        return redirect()->route('faq.index')
            ->with('success', 'Faq created successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Faqs  $faq
     * @return \Illuminate\Http\Response
     */
    public function show(Faqs $faq)
    {
        //
        return view('faqs.show', compact('faq'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function edit(Faqs $faq)
    {
        //
        return view('faqs.edit', compact('faq'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Faqs $faq)
    {
        //
        $request->validate([
            'question' => 'required',
            'answer' => 'required'
        ]);
        $faq->update($request->all());

        return redirect()->route('faq.index')
            ->with('success', 'Faq updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function destroy(Faqs $faq)
    {
        //
        $faq->delete();

        return redirect()->route('faq.index')
            ->with('success', 'Faq deleted successfully');
    }
}
