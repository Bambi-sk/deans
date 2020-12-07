<?php

namespace App\Http\Controllers;

use App\Models\Certifications;
use App\Models\CerfTypes;
use Illuminate\Http\Request;

class CertificationController extends Controller
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
        if (auth()->user()->is_admin == true) {
            $cerf=Certifications::all();
            $cerf_Type=CerfTypes::all();
            return view('certification.index',['cerf'=>$cerf,'cerftype'=>$cerf_Type]);
        }
        
        return view('pages.403');
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        if (auth()->user()->is_admin == true) {
            $cerf_Type=CerfTypes::all();
            return view('certification.create',['cerfType'=>$cerf_Type]);
        }
        return view('pages.403');
      
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
        if (auth()->user()->is_admin == true) {
            $cerf=new Certifications();
            $cerf->uni_logo=request('uni_logo');
            $cerf->uni_organization=request('uni_organization');
            $cerf->title=request('title');
            $cerf->paragraph=request('paragraph');
            $cerf->type_cerf_id=request('cerfType_id');
            $cerf->main_part=request('main_part');
            $cerf->license=request('license');
            $cerf->save();
            error_log($cerf);
            return redirect('/cerf')->with('success', 'Object created successfully.');;   
        }
        return view('pages.403');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Certification  $certification
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        if (auth()->user()->is_admin == true) {
            $cerf_Type=Certifications::findOrFail($id);
            return view('cerf.show', ['cerfType'=>$cerf_Type]);
        }
        return view('pages.403');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Certification  $certification
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        if(auth()->user()->is_admin == true){
            $cerf=Certifications::findOrFail($id);
            $cerf_Type=CerfTypes::all();
            return view('certification.edit', ['cerfType'=>$cerf_Type,'cerf'=>$cerf]);
        }
        return view('pages.403');
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Certification  $certification
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        if(auth()->user()->is_admin == true){
            $id=$request->id;
            $cerf = Certifications::find($id);
            $cerf->uni_logo=request('uni_logo');
            $cerf->uni_organization=request('uni_organization');
            $cerf->title=request('title');
            $cerf->paragraph=request('paragraph');
            $cerf->type_cerf_id=request('cerfType');
            $cerf->main_part=request('main_part');
            $cerf->license=request('license');
            $cerf->save();
            error_log($cerf);
            return redirect('/cerf')->with('success', 'Object created successfully.');
        }
        else{
            return view('pages.403');
        }
       

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Certification  $certification
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        if(auth()->user()->is_admin == true){
                $cerf = Certifications::findOrFail($id);
                $cerf->delete();

                return redirect('/cerf')
                    ->with('success', 'Object deleted successfully');
        }
        else{
                return view('pages.403');
        }
    }
}
