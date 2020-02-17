<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Eloquent\Model\Product;
use App\Eloquent\Model\Product_image;
use App\Eloquent\Model\Category;
use App\Eloquent\Model\Favourite;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if (isset($request->id)) {
            $product = Product::with('image')->where('subcategory_id',$request->id)->paginate(3);
            $category = Category::all();
//            dd($product);
            return view('frontEnd/index', compact('product', 'category'));
        }else {
            $product = Product::with('image')->paginate(3);
//            dd($product);
            $category = Category::all();
            return view('frontEnd/index', compact('product', 'category'));
        }
    }

   public function addfavourite($productId,$imgId){

       $customerId = \Auth::user()->id;

       $status = Favourite::where('customer_id',$customerId)->where('productimg_id',$imgId)->first();
       if(isset($status->customer_id) and isset($productId))
       {
           return redirect()->back()->with('error', 'This item is already in your wishlist!');
       }else {

           $favourite = new Favourite();
           $favourite->product_id = $productId;
           $favourite->customer_id = $customerId;
           $favourite->productimg_id = $imgId;
           $favourite->save();
           return redirect()->back()->with('success', 'Added to Favourite list successfully.');
       }
   }

    public function displayWishlist(){
        $favourites = Favourite::with('productImages')->paginate(3);
//        dd($favourites->toArray());
        return view('frontEnd.myWishlist',compact('favourites'));
    }


    public function deleteWishlist($id){
//        dd($id);
        $product = Favourite::where('productimg_id',$id)->delete();
        return redirect()->back()->with('success','Product deleted Successfully');
    }
}
