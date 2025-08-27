<?php

namespace App\Http\Controllers\Backend;

use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Unique;


class ProductController extends Controller
{
    function index(){
      $products = Product::with('category:id,category_title')->active()->select('id','title','slug', 'featured_img', 'featured','sku','price','selling_price','category_id', 'status','stock')->latest()->get();
        
        return view('backend.product.index', compact('products'));
    }

    function create(){
          $categories = Category::active()->get();
       return view('backend.product.create', compact('categories'));
    }

    function store(Request $request){
     
    

          $request->validate([
            'title' => 'required|unique:products,title',
            'featured_img' => 'required|mimes:png,jpg,webp',
            'gallImage.*' => 'nullable|mimes:png,jpg,webp',
        ], [
            'gallImage.*.mimes' => 'Please upload a png or jpg image'
        ]);

        //* Featured Image
        $fileName = str($request->title)->slug() . '-' . uniqid() . "." . $request->featured_img->extension();
        $featuredImgPath = $request->featured_img->storeAs('products', $fileName, 'public');


        //* Gallery Image
        $galleryImagesPath = [];
        if (count($request->gallImage ?? []) > 0) {
            foreach ($request->gallImage as $gallImg) {
                $fileName = str($request->title)->slug() . '-' . uniqid() . "." . $gallImg->extension();
                $gallImgPath = $gallImg->storeAs('products', $fileName, 'public');
                $galleryImagesPath[] = $gallImgPath;
            }
        }



        Product::create([
            'title' => $request->title,
            'slug' => str($request->title)->slug(),
            'category_id' => $request->category,
            "status" => true,
            'featured' => false,
            'featured_img' => $featuredImgPath ?? null,
            'gall_img' => json_encode($galleryImagesPath),
            'sku' => $request->sku,
            'price' => $request->price,
            'selling_price' => $request->selling_price,
            'short_details' => $request->short_details,
            'long_details' => $request->long_details,
            'additional_info' => $request->additional_info,
        ]);

        return to_route('backend.product.index')->with('msg', [
            'type' => 'success',
            'res' => 'Product added successfully',
        ]);
    }
    function statusUpdate() {}
}