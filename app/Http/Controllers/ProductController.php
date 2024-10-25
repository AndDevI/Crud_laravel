<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function home() {
        return view('page/home');
    }

    public function create() {
        return view('page/functions/create');
    }

    public function store() {

    }

    public function edit() {

    }

    public function destroy() {

    }
}
