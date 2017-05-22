<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index(){
        return view('task.list');
    }

    public function add(){
        return view('task.add');
    }

    public function update(){
        return view('task.update');
    }
}
