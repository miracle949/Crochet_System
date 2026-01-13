<?php

namespace App\Http\Controllers;

use App\Models\ProductTable;
use App\Models\category;
use Illuminate\Http\Request;
use Auth;

class AddProductsController extends Controller
{

    public $product, $category;

    public function __construct(){
        $this->product = new ProductTable();
        $this->category = new category();   
    }

    public function AddProducts(){

        $username = Auth::user()->username;

        $categories = $this->category->get_all_category();

        return view('admin_add_products', ['username' => $username], compact('categories'));
    }

    public function add_Products(Request $request){
        $incomingFields = $request->validate([
            "name" => "required",
            "description" => "required",
            "category" => "required",
            "stocks" => "required|max:5",
            "price" => "required",
            "image" => "required|image|mimes:jpeg,png,jpg,gif|max:2048",
        ]);

        if($request->hasFile('image')){
            
            $image = $request->file('image');

            $imageName = time() . "_" . $image->getClientOriginalName();

            $image->move(public_path("uploads/products"), $imageName);

            $incomingFields['image'] = $imageName;
        }

        $this->product->createProducts($incomingFields);

        return redirect()->route("AddProducts")->with('success', "Create Product Successfully!");
    }

    function admin_all_products(){
        $username = Auth::user()->username;

        $products = $this->product->getAllProducts();

        return view("admin_all_products", ["username" => $username], compact('products'));
    }

    function deleteProducts($id){
        $this->product->deleteProducts($id);
  
        return redirect()->route('admin_all_products')->with('success', 'Delete Successfully!');
    }

    function editProducts($id){

        $username = Auth::user()->username;

        $product = $this->product->getProducts($id);

        return view('admin_edit_products', compact('product'), ["username" => $username]);
    }

    function SaveEditProducts(Request $request){
        $incomingFields = $request->validate([
            "name" => "required",
            "description" => "required",
            "category" => "required",
            "stocks" => "required|max:5",
            "price" => "required",
            "featured" => "required",
            "image" => "required|image|mimes:jpeg,png,jpg,gif|max:2048",
        ]);

        if($request->hasFile('image')){
            
            $image = $request->file('image');

            $imageName = time() . "_" . $image->getClientOriginalName();

            $image->move(public_path("uploads/products"), $imageName);

            $incomingFields['image'] = $imageName;
        }

        $this->product->SaveProducts($incomingFields, $request->id);

        return redirect()->route('admin_all_products')->with('success', 'Update Successfully!');


    }

    function product_category(){

        $username = Auth::user()->username;

        return view("admin_category_products", ["username" => $username]);
    }

    function HomePage(){
        $products = $this->product->getAllProducts();

        return view('home', compact('products'));
    }

}


