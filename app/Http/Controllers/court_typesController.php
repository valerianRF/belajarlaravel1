<?php

namespace App\Http\Controllers;
use App\Models\court_types;
use Illuminate\Http\Request;

class court_typesController extends Controller
{
    public function index(){
        $types = court_types::all();
        return view('mcourt_types', compact('types'));
        // return $types;
        // return view('mcourt_types');
    }

    public function store(){

    }
}
