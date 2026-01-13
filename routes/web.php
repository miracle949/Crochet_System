<?php

use App\Http\Controllers\AddCategoryController;
use App\Http\Controllers\FeaturedController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AddProductsController;

Route::get('/', [UserController::class, 'indexHome'])->name('index');

Route::get('/user-handle', [UserController::class, 'userHandle'])->name('userHandle');

Route::get('/home', [UserController::class, 'Homepage'])->name('Homepage');

Route::get("/favorite", [UserController::class, "Favorite"])->name("FavoriteSection");

Route::get('/dashboard', [UserController::class, 'DashboardPage'])->name('DashboardPage')->middleware('auth');

Route::get('/login', function() {
    return view('login');
})->name('login');

Route::get('/signup', function() {
    return view('signup');
})->name('signup');

Route::get('/AllProducts', [UserController::class, 'ProductsSection'])->name('AllProducts');

Route::get('/admin_add_products', [AddProductsController::class, 'AddProducts'])->name('AddProducts');

Route::get('/admin_all_products', [AddProductsController::class, "admin_all_products"])->name("admin_all_products");

Route::post('/user-register', [UserController::class, 'UserRegister'])->name('register');

Route::post('/user-login', [UserController::class, 'UserLogin'])->name('Login');

Route::post('/logout', [UserController::class, 'Userlogout']);

// crochet category

Route::get('/crochet-category', [AddProductsController::class, "product_category"])->name("product_category");

// each products

Route::get('/view_products/{id}', [UserController::class, 'view_products'])->name('view_products');

// all featured

Route::get('/admin_all_featured_products', [FeaturedController::class, 'all_featured'])->name('featured_page');

// add featured

Route::get('/admin_add_featured_products', [FeaturedController::class, 'add_featured'])->name('add_featured');

// All Category

Route::get('/admin_all_category_products', [AddCategoryController::class, 'all_category'])->name('all_category');

// Add Products Category get/url

Route::get('/admin_add_category_products', [AddCategoryController::class, "add_category"])->name('add_category');

// Add Products Category post

Route::post('/admin_add_category_products', [AddCategoryController::class, 'AddCategory'])->name('AddCategory');

// featured products

// delete Category 

Route::get('/delete-category/{id}', [AddCategoryController::class, 'delete_category'])->name('deleteCategory');

// Add Products

Route::post('/add_Products', [AddProductsController::class, "add_Products"])->name("add_Products");


// admin delete products

Route::get('/delete-products/{id}', [AddProductsController::class, 'deleteProducts'])->name('deleteProducts');

// admin edit products

Route::get('/edit-products/{id}', [AddProductsController::class, 'editProducts'])->name('editProducts');

Route::post('/save-edit-products', [AddProductsController::class, 'SaveEditProducts'])->name('SaveEditProducts');

// products order
Route::post("/order_products", [UserController::class, "AddProducts"])->name("AddProducts");