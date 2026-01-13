<?php

namespace App\Http\Controllers;

use App\Models\featured_products;
use Illuminate\Http\Request;
use Auth;

class FeaturedController extends Controller
{

    public $feature;

    function __construct(){
        $this->feature = new featured_products();
    }

    function all_featured(){
        $username = Auth::user()->username;

        $featured = $this->feature->getAllFeatured();

        return view('admin_all_featured_products', ['username' => $username], compact('featured'));
    }

    function add_featured(){
        $username = Auth::user()->username;

        return view('admin_add_featured_products', ['username' => $username]);
    }
}
