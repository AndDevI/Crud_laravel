<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Product;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;


class ProductController extends Controller
{
    public function home() {
        $products = Product::where('user_id', Auth::id())
                            ->orderBy('created_at', 'DESC')
                            ->get();

        return view('page/home', [
            'products' => $products
        ]);
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
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->route('create')->withInput()->withErrors($validator);
        }

        $product = new Product();
        $product->name = $request->name;  
        $product->cod = $request->cod;
        $product->price = $request->price;
        $product->description = $request->description;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $ext = $image->getClientOriginalExtension();
            $imageName = time() . '.' . $ext;

            $image->move(public_path('images'), $imageName);

            $product->image = $imageName;
        }

        $product->user_id = Auth::id();

        $product->save();

        return redirect()->route('home')->with('success', 'Produto adicionado com sucesso!');
    }

    public function edit($id) {
        $product = Product::findOrFail($id);

        return view('page/functions/edit', [
            'product' => $product
        ]);
    }

    public function update($id, Request $request) {
        $product = Product::findOrFail($id);

        $rules = [
            'name' => 'required|string|max:255',
            'cod' => 'required|string|max:100|unique:products,cod,' . $product->id,
            'price' => 'required|numeric|min:0',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->route('edit', $product->id)->withInput()->withErrors($validator);
        }

        $product->name = $request->name;  
        $product->cod = $request->cod;
        $product->price = $request->price;
        $product->description = $request->description;

        if ($request->hasFile('image')) {
            if ($product->image) {
                File::delete(public_path('images/' . $product->image));
            }

            $image = $request->file('image');
            $ext = $image->getClientOriginalExtension();
            $imageName = time() . '.' . $ext;

            $image->move(public_path('images'), $imageName);

            $product->image = $imageName;
        }

        $product->save();

        return redirect()->route('home')->with('success', 'Produto atualizado com sucesso!');
    }

    public function destroy($id) {
        $product = Product::findOrFail($id);

        if ($product->image) {
            File::delete(public_path('images/' . $product->image));
        }
        $product->delete();

        return redirect()->route('home')->with('success', 'Produto deletado com sucesso!');
    }

}
