<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Review;


class FrontendController extends Controller
{
  
    function register(){
        return view('frontend.register');
    }
   function index(){
  
    return view('frontend.index');
   }

    function about(){
      return view('frontend.about');
    }
    public function shop()
    {
        $products = Product::latest()->paginate(4);
        return view('frontend.shop', compact('products'));
        
    }
    function categoryArchive(Request $request, $slug = null)
    {
        $productCategories = Category::has('products')
            ->where('status', 1)
            ->withCount('products')
            ->get();
    
        $products = Product::query(); // Start query
    
        // Filter by slug (highest priority)
        if ($slug) {
            $category = Category::where('slug', $slug)
                ->select('id','category_title','slug')
                ->first();
            
            if ($category) {
                $products->where('category_id', $category->id);
            }
        } else { 
            $category = null;
            
            // Only apply request category filter if no slug is present
            if ($request->category) {
                $products->where('category_id', $request->category);
            }
        }
        
        // Filter by search
        if ($request->search) {
            $products->where('title', 'like', "%{$request->search}%");
        }
        
        $products = $products->where('status',1)->select('id', 'slug', 'title', 'price', 'selling_price', 'featured_img')
            ->latest()
            ->paginate(4);
    
        return view('frontend.shop', compact('products', 'category', 'productCategories'));
    }

     function showProduct($slug){
      if(!$slug){
        abort(404);
      }
      $product = Product::with('reviews.user:id,name,email')->where('slug', $slug)->first();
     $hasReview= Review::where('user_id', auth()->id() ?? null)->where('product_id',$product->id)->exists();
    
       $relatedProducts = Product::where('status',1)->where('category_id',$product->category_id)->whereNot('id',$product->id)->select('id', 'slug','title','price','selling_price','featured_img')->latest()->take(4)->get();
       
      return view('frontend.product' , compact('product','relatedProducts','hasReview'));
     }

     function reviewSubmit(Request $request){
      $request->validate([
        'rating'=>'required|min:0|max:5',
        'message'=>'nullable'
      ]);

     
   
       Review::create([
        'product_id' => $request->product_id,
        'user_id' => auth()->id(),
         'user_name'  => auth('web')->user()->name ?? 'Guest',
        'rating' => $request->rating,
        'message'=> $request->message,
       ]);
       return back();

     }

     function search(Request $request){
      $products=[];
       if($request->search){
          $products = Product::whereLike('title',"%$request->search%")->select('id','title','slug')->latest()->take(10)->get();
       }
       return $products;
     }
   
}

