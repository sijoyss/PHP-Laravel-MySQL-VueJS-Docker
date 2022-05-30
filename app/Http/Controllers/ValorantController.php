<?php

namespace App\Http\Controllers;

use App\Models\Valorant;
use Illuminate\Http\Request;

class ValorantController extends Controller
{
    public function index(){
        return Valorant::all();
    }

     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {       
            return Valorant::create($request->all());
    }
}
