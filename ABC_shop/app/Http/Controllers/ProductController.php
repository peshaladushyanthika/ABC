<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    //
                                      
    public function index(){
       $products = Product::all();
       return view('products' , ['products' => $products , 'layout' => 'index']);
      
    }

    public function create()
    {
        $products = Product::all();
        return view('products' , ['products' => $products , 'layout' => 'create']);
    }

    public function show($id)
    {
        $products = Product::find($id);
        $products = Product::all();
        return view('products' , ['products' => $products , 'layout' => 'show']);
    }

    public function store(Request $request){

        $validator = Validator::make($request->all(), [
            'category_id' => 'required|max:255',
            'title' => 'required|max:255',
            'name' => 'required|max:8',
            'description' => 'required|max:225',
            'price' => 'required|max:8',
            'image' => 'required|image|mimes:png,jpg,jpeg|max:2048',
        ]);

        if($validator->fails()){
            return response()->json([
                'validation_error'=> $validator->messages()
        ]);
        }

        else{
            $product = new Product;
            $product->category_id = $request->input('category_id');
            $product->title = $request->input('title');
            $product->name = $request->input('name');
            $product->description = $request->input('description');
            $product->price = $request->input('price');
            
            if($request->hasFile('image')){
                $product->image = $request->file('image')->store('products');
            }
            $product->status = $request->input('status') == true ? '1':'0';
            $product->save();
        }

        return response()->json([
            'message'=>'added product',
        ]);
    }

    public function edit($id)
    {
        $product = Product::find($id);
        $products = Product::all();
        return view('products' , ['products' => $product , 'layout' => 'edit']);
    }

    public function update(Request $request, $id){

        $validator = Validator::make($request->all(), [
            'category_id' => 'required|max:255',
            'title' => 'required|max:255',
            'name' => 'required|max:8',
            'description' => 'required|max:225',
            'price' => 'required|max:8',
        ]);

        if($validator->fails()){
            return response()->json([
                'validation_error'=> $validator->messages()
        ]);
        }
        else{
            $product = Product::where('id', $id)->first();
            $product->category_id = $request->input('category_id');
            $product->title = $request->input('title');
            $product->name = $request->input('name');
            $product->description = $request->input('description');
            $product->price = $request->input('price');
            //dd($product);
            
            if($request->hasFile('image')){
                $product->image = $request->file('image')->store('products');
            }
            $product->status = $request->input('status') == true ? '1':'0';
            //dd($product);
            $product->update();
        }

        return response()->json([
            'message'=>'updated product',
        ]);
       // return view('products' , ['product' => $product , 'layout' => 'edit']);

    }

    public function destroy($id){

        $product = Product::where('id' , $id)->first();
        //dd($category);
        if($product){
            $product->delete();
            return response()->json([
                'message'=> 'product deleted!',
                'status'=> 200,
            ]); 
            }
            else{
                return response()->json([
                    'message'=> 'product is not found',
                ]);
                }

    }


    
    
}
