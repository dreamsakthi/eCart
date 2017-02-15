<?php
 
namespace App\Http\Controllers;
 
use App\Product;
use Auth;
 
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Request;
 
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
 
class ProductController extends Controller
{
 
    public function __construct()
    {
        $this->middleware('auth');
        
    }
    
    public function index(){
        $user = Auth::user();
        if($user->name == 'Admin'){
            $products = Product::all();
            return view('admin.products',['products' => $products]);
        } else {
            return redirect('/');
        }
    }

    public function destroy($id){
        Product::destroy($id);
        return redirect('/admin/products');
    }
 
    public function newProduct(){
         $user = Auth::user();
         if($user->name == 'Admin'){
            return view('admin.new');
        } else {
            return redirect('/');
        }
    }

    public function edit($id){
        $product = Product::findOrFail($id);
        return view('admin.edit')->withProduct($product);
    }

    public function update($id, Request $request)
    {
        $product = Product::findOrFail($id);
        $product->name =Request::input('name');
        $product->description =Request::input('description');
        $product->price =Request::input('price');
        $product->imageurl =Request::input('imageurl');
        $product->save();
        return redirect('/admin/products');
    }
 
    public function add() {
 
        $product  = new Product();
        $product->name =Request::input('name');
        $product->description =Request::input('description');
        $product->price =Request::input('price');
        $product->imageurl =Request::input('imageurl');
        $product->save();
        return redirect('/admin/products');
 
    }
}