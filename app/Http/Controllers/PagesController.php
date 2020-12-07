<?php

namespace App\Http\Controllers;
use App\Models\Certifications;
use App\Models\CerfTypes;
use App\Models\Students;


use App\Models\Nationalities;
use App\Models\Specialities;
use App\Models\Streams;
use App\Models\TypeStudies;
use App\Models\DeansOffices;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function __construct()
  {
    $this->middleware('auth');
  }
  
    public function index(){
        echo
        $id=auth()->user()->id;
        
        $nationality=Nationalities::all();
        
        $speciality=Specialities::all();
        $stream=Streams::all();
        $deans= DeansOffices::all();
        $typeStudy=TypeStudies::all();
        $cerf=Certifications::all();
        $student=Students::where('id_users',$id)->first();
        $params=[
            'student'=>$student,
            'nationality'=>$nationality,
            'speciality'=>$speciality,
            'stream'=>$stream,
            'typeStudy'=>$typeStudy,
            'cerf'=>$cerf,
            'deans'=>$deans
        ];
        
       
       
        return view('pages.index')->with($params);
    }

    public function faq(){
        return view('pages/faq');
    }
    // public function formsprav(){
    //     return view('pages/formsprav');
    // }
    public function formzaev(){
        return view('pages/formzaev');
    }
    public function login(){
        return view('pages/login');
    }

    public function mysprav(){
        return view('pages/mysprav');
    }
   
    public function myzaev(){
        return view('pages/myzaev');
    }
    public function sendspravka(){
        $cerf=Certifications::all();
        $id=auth()->user()->id;
        $student=Students::where('id_users',$id)->get();
        $cerf_Type=CerfTypes::all();

        return view('pages.sendspravka',['cerf'=>$cerf,'cerftype'=>$cerf_Type]);
    }
    public function sendzaev(){
        return view('pages/sendzaev');
    }
}
