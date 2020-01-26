<?php

namespace App\Http\Controllers\Admin\Formulir\Formulir1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Formulir1Controller extends Controller
{
    public function index(){
        return view('admin.modul.formulir1.index');
    }

    public function edit(){
        return view('admin.modul.formulir1.edit');
    }
}
