<?php

namespace App\Http\Controllers;

use App\Models\Faqs;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function __construct()
  {
    $this->middleware('auth');
  }
  
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        if(auth()->user()->is_admin == true){
            $faqs = Faqs::all();
            return view('faqs.index', compact('faqs'));
        }
        else{
            return view('pages.403');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        if(auth()->user()->is_admin == true){
            return view('faqs.create');
        }
        else{
            return view('pages.403');
        }
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
        if(auth()->user()->is_admin == true){
            $faq=new Faqs();
            $faq->question = $request->question;
            $faq->answer = $request->answer;
            $faq->save();
            return redirect()->route('faq.index')
                ->with('success', 'Faq created successfully.');
        }
        else{
            return view('pages.403');
        }

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
        if(auth()->user()->is_admin == true){
            return view('faqs.show', compact('faq'));
        }
        else{
            return view('pages.403');
        }
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
        if(auth()->user()->is_admin == true){return view('faqs.edit', compact('faq'));}
        else{return view('pages.403');}
        
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
        if(auth()->user()->is_admin == true){
            $request->validate([
                'question' => 'required',
                'answer' => 'required'
            ]);
            $faq->update($request->all());

            return redirect()->route('faq.index')
                ->with('success', 'Faq updated successfully');
        }
        else{
            return view('pages.403');
        }
        
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
        if(auth()->user()->is_admin == true){
            $faq->delete();

            return redirect()->route('faq.index')
                ->with('success', 'Faq deleted successfully');
        }
        else{
                return view('pages.403');
        }
    }
}
