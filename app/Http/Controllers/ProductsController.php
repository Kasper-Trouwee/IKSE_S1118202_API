<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class ProductsController extends Controller
{
    public function index(){
         return product::all();
    }

    public function show($id){
        return product::where('id', $id)->first();
   }

    public function create(Request $request, Product $product){
        $random = Str::random(40);
        $request->validate([
            'image' => 'required|image|mimes:jpg,jpeg|max:2048',
        ]);
        
        $request->image->move(public_path('img'), $random . '.jpg');

        $product->productname = $request->productname;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->image = "img/" . $random . '.jpg';
        try {
            $product->save();
            return redirect('/');
        } catch (Exception $e) {
            return redirect('/product');
        }
    }

    public function update(Request $request){
        $product = product::where('id', $request->id)->first();
        $product->productname = $request->productname;
        $product->description= $request->description;
        $product->price = $request->price;

        try{
            $product->save();
        } catch(Exception $e){
            return redirect("/profile");
        }
    }

    public function delete($id)
    {
        $product = product::where('id', $id)->first();
        $product->delete();
    }

}
