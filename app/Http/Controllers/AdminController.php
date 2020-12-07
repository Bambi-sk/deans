<?php

namespace App\Http\Controllers;

use App\Models\CerfTypes;
use Illuminate\Http\Request;

class AdminController extends Controller
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
        $cerf_Types = CerfTypes::all();

        return view('pages.indexAdmin');
    }
}
