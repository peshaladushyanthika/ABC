<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    //

    public function index(){
        return view('categories');
    }

    public function store(Request $request){

        $validator = Validator::make($request->all(),[
            'title'=> ['required' ,'max:100'],
            'name'=> ['required' ,'max:100'],
            'description'=> ['required' ,'max:255'],
        ]);
    
        if($validator->fails()){
            return response()->json([
                'validation_error'=> $validator->messages()
        ]);
        }
        else{
            $category = new Category;
            $category->title = $request->input('title');
            $category->name = $request->input('name');
            $category->description = $request->input('description');
            $category->status = $request->input('status');
            $category->save();
            return response()->json([
                'message'=> 'category added!',
                'status'=> 200,
            ]);
            }
    }
}
