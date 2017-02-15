<?php
namespace App\Http\Controllers;

use App\Product;
 
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\RestFul;
 
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;


class RestFulController extends Controller
{
   
    public function products()
    {
        return $products = Product::all();
    }

    public function users()
    {
        return $users = User::all();
    }

    
}
