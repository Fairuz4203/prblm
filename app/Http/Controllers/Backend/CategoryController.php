<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View; 
use App\Models\Category;



class CategoryController extends Controller
{
    function index():View {
        try {
        $categories = Category::latest()
            ->orderBy('status', 'DESC')
            ->get();
       
        return view('backend.category.index', compact('categories'));

    } catch (\Throwable $th) {
       
    }
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

        return to_route('backend.category.index')->with('msg',[
            'type'=>'success',
            'res' =>'Category has created successfully .'
        ]);

       
    }
    function statusUpdate($id){
        $category = Category::findOrFail($id);
        $category->status = !$category->status;
          $category->save();
          return to_route('backend.category.index')->with('msg', []);
    }
    public function edit(Category $category)
    {
        return view('backend.category.edit', compact('category'));
    }
    
}

