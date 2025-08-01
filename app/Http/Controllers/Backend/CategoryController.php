<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View; 
use App\Models\Category;



class CategoryController extends Controller
{
    function index(): View {
        return view ('backend.category.index');
    }

    function create(): View {
        return view ('backend.category.create');
    }

    function store(Request $request){
        $request->validate([
            'category_title' => 'required',
            'slug' =>'required|unique:categories,slug',
            'icon' => 'nullable|mimes:png,jpg,webp'
        ],[
            'slug.unique'=> 'This Category already exists!'
        ]);

        //*Save Server
        $path = null;
        if($request->hasFile('icon')){
            $name = $request->slug . "." .$request->icon->extension();
            $path= $request->icon->storeAs('categories', $name,'public');
            
        }

        Category::create([
            'category_title'=>$request->category_title,
            'slug'=> $request->slug,
            'icon'=> $path
        ]);
       
    }
    
}
