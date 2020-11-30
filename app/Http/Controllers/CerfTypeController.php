<?php

namespace App\Http\Controllers;

use App\Models\CerfTypes;
use Illuminate\Http\Request;

class CerfTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cerf_Types = CerfTypes::all();

        return view('cerfType.index', compact('cerf_Types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('cerfType.create');
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
        $cerf_Type=new CerfTypes();
        $cerf_Type->name = $request->name;
        
        $cerf_Type->period_date = $request->period_date;
        $cerf_Type->save();
        return redirect('/cerfType')
            ->with('success', 'Object created successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CerfTypes  $cerf_Type
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $cerf_Type=CerfTypes::findOrFail($id);

        return view('cerfType.show', ['cerfType'=>$cerf_Type]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cerf_Type  $cerf_Type
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $cerf_Type=CerfTypes::findOrFail($id);

        return view('cerfType.edit', ['cerfType'=>$cerf_Type]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cerf_Type  $cerf_Type
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $id=$request->id;
        $cerf = CerfTypes::find($id);
        $cerf->name=request('name');
        $cerf->period_date=request('period_date');
        $cerf->save();
        error_log($cerf);
        return redirect('/cerfType')
            ->with('success', 'Object updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cerf_Type  $cerf_Type
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $cerf = CerfTypes::findOrFail($id);
        $cerf->delete();

        return redirect('/cerfType')
            ->with('success', 'Object deleted successfully');
    }
}
