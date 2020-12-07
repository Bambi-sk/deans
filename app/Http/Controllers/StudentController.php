<?php

namespace App\Http\Controllers;

use App\Models\Students;
use App\Models\Nationalities;
use App\Models\Specialities;
use App\Models\Streams;
use App\Models\TypeStudies;
use App\Models\Certifications;
use Illuminate\Http\Request;

class StudentController extends Controller
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
        $student=Students::where('id',1)->get();
        $nationality=Nationalities::all();
        $speciality=Specialities::all();
        $stream=Streams::all();
        $typeStudy=TypeStudies::all();
        $cerf=Certifications::all();
        return view('pages.index',['student'=>$student,'nationality'=>$nationality,
        'speciality'=>$speciality,'stream'=>$stream,'typeStudy'=>$typeStudy,'cerf'=>$cerf]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Students $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Students $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Students $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Students $student)
    {
        //
    }
}
