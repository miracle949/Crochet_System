<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\ProductTable;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Auth;

class AddCategoryController extends Controller
{

    public $category, $product;

    function __construct(){
        $this->category = new category();
        $this->product = new ProductTable();
    }

    function add_category(){

        $username = Auth::user()->username;

        return view('admin_add_category_products', [
            "username" => $username
        ]);
    }

    function all_category(){

        $username = Auth::user()->username;

        $categories = $this->category->get_all_category();

        $rowCount = ProductTable::where('category')->count();

        return view('admin_all_category_products', [
            "username" => $username
        ], compact('categories', 'rowCount'));
    }

    function AddCategory(Request $request){
        $incomingFields = $request->validate([
            "name" => ['required', Rule::unique('categories', 'name')],
            'description' => 'required',
            "image" => "required|image|mimes:jpeg,png,jpg,gif|max:2048",
        ]);

        if($request->hasFile('image')){
            $image = $request->file('image');

            $imageName = time() . "_" . $image->getClientOriginalName();

            $image->move(public_path('uploads/products'), $imageName);

            $incomingFields['image'] = $imageName;
        }

        $this->category->add_category_table($incomingFields);

        return redirect()->route('add_category')->with('success', 'Create Category Successfully!');
        
    }

    function delete_category($id){
        $this->category->DeleteCategories($id);

        return redirect()->route('all_category')->with('success', 'Delete Successfully!');
    }
}
