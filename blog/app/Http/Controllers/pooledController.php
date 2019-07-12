<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pooledController
{
    //
    public function indexx(){
        return view('admin.index');
    }
    public function galaries(){
        return view('admin.gallery');
    }
    public function table(){
        return view('admin.tabels');
    }
    public function sign(){
        return view('admin.signin');
    }
    public function signups(){
        return view('admin.signup');
    }
    public function forgotpasswords(){
        return view('admin.forgot-password');
    }
    public function movie(){
    return view('admin.entertaintment.movies');
}
    public function natok(){
        return view('admin.entertaintment.natoks');
    }
    public function other(){
        return view('admin.entertaintment.other');
    }
    public function icons(){
        return view('admin.nodes.icon');
    }
    public function books(){
        return view('admin.nodes.book');
    }
    public function news(){
        return view('admin.nodes.newss');
    }
    public function crickets(){
        return view('admin.sports.cricket');
    }
    public function footballs(){
        return view('admin.sports.football');
    }
    public function others(){
        return view('admin.sports.other');
    }
    public function map(){
    return view('admin.maps');
}
    public function calanders(){
        return view('admin.calendar');
    }
    public function neews(){
        return view('admin.news');
    }
    public function oxy(){
        return view('admin.oxy');
    }




}