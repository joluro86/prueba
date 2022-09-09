<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index(){
        return view('cities.index');
    }

    public function create(){
        return view('cities.create');

    }

    public function show($city){
        return view('cities.show',compact('city'));
    }
}
