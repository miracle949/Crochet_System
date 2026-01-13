<?php

namespace App\Http\Controllers;

use App\Models\User_tbl;
use App\Models\category;
use App\Models\ProductTable;
use Auth;
// use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public $user, $category, $product;

    function __construct()
    {
        $this->user = new User_tbl();
        $this->category = new category();
        $this->product = new ProductTable();
    }

    function AddProducts(Request $request){
        $request->validate([
            
        ]);
    }

    function userHandle()
    {

        $user = Auth::user();

        if ($user->user_role === 'user') {

            return redirect()
            ->route("Homepage")
            ->with([
                'message', "Login successfully!",
                'redirect_to' => route("Homepage")
            ]);
            
        } else {

            return redirect()
            ->route("DashboardPage")
            ->with([
                'message', "Login successfully!",
                'redirect_to' => route("DashboardPage")
            ]);
        }
    }

    function Homepage()
    {

        // $username = Auth::check() ? Auth::user()->username : null;

       $username = Auth::check() ? Auth::user()->username : null;

        $categories = $this->category->get_all_category();

        return view('home', ['username' => $username], compact('categories'));
    }

    function DashboardPage()
    {
        $username = Auth::user()->username;
        $email = Auth::user()->email;

        return view('dashboard', ['username' => $username]);
    }

    function indexHome()
    {
        return view('home');
    }

    function Favorite()
    {
        return view("favorite");
    }

    function ProductsSection()
    {

        $username = Auth::check() ? Auth::user()->username : null;

        $products = $this->product->getAllProducts();

        return view("products", ["username" => $username], compact('products'));
    }

    function view_products($id)
    {

        $username = Auth::check() ? Auth::user()->username : null;

        $products = $this->product->getProducts($id);

        $featuredProducts = ProductTable::where('featured', 'Yes')->get();

        return view('view_products', ['username' => $username], compact('products', 'featuredProducts'));
    }


    function Userlogout(Request $request)
    {
        Auth::logout();
        return redirect()->route('login');
    }

    function UserLogin(Request $request)
    {
        $incomingFields = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if(
            auth()->attempt([

                'email' => $incomingFields['email'],
                'password' => $incomingFields['password']

            ])
        ) {

            $request->session()->regenerate();

            return redirect()->route('userHandle');

        } else {

            session()->flash('error', 'Login error!');

            return redirect()->route('login');
        }
    }

    function UserRegister(Request $request)
    {
        $incomingFields = $request->validate([
            'username' => ['required',
             Rule::unique('user_tbls', 'username')],
            'password' => 'required',
            'email' => ['required', Rule::unique('user_tbls', 'email')]
        ]);

        $incomingFields['password'] = bcrypt($incomingFields['password']);

        $users = $this->user->UserCreate($incomingFields);

        Auth::login($users);

        session()->flash('success', 'Create an account successfully!');

        return redirect()->route('signup');

    }
}
