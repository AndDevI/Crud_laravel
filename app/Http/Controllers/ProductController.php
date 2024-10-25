<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Product;

class ProductController extends Controller
{
    public function home() {
        return view('page/home');
    }

    public function create() {
        return view('page/functions/create');
    }

    public function store(Request $request) {
        $rules = [
            'name' => 'required|string|max:255',
            'cod' => 'required|string|max:100|unique:products,cod',
            'price' => 'required|numeric|min:0',
            'description' => 'required|string',
            'imagem' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ];

        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()) {
            return redirect()->route('create')->withInput()->withErrors($validator);
        }

        $product = new Product();
        $product->name = $request->name;  
        $product->cod = $request->cod;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->save();

        return redirect()->route('home')->with('success', 'Produto adicionado com sucesso!');
    }

    public function edit() {

    }

    public function destroy() {

    }
}
