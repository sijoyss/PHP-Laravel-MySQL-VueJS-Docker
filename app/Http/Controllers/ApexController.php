<?php

namespace App\Http\Controllers;

use App\Models\Apex;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApexController extends Controller
{
    public function index(){
        return Apex::all();

        // return Apex::get()->count();
        
    }
     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {       
           return Apex::create($request->all());
    }
}
