<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Doctor;

class HomeController extends Controller
{
    public function redirect(){

        return view('inicio');
    }

    public function index(){

        return view('inicio');
    }

    public function servicios(){

        return view('servicios');
    }

    public function especialistas(){

        // $doctor = doctor::all();
        $doctor = doctor::paginate(6);

        return view('especialistas', compact('doctor'));
    }

    public function about(){

        return view('about');
    }

    public function preguntasrespuestas(){

        return view('q&a');
    }

    public function blog(){

        return view('blog');
    }

    
}
