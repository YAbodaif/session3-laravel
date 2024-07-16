<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

// Route::get('/', function () {
//     return view('welcome');
// });


//view all Products
Route::get('allproducts/',[ProductController::class,'index'])->name('allproducts_index');
// view one
Route::get('allproducts/{id}',[ProductController::class,'viewOne'])->name('allproducts_viewOne');

//Add New Product
Route::get('allproduct/add',[ProductController::class,'add'])->name('allproducts_add');
Route::post('allproduct/store',[ProductController::class,'store'])->name('allproducts_store');

//delete
Route::get('allproduct/delconfirm/{id}',[ProductController::class,'delconfirm'])->name('allproducts_delconfirm');
Route::get('allproduct/delete/{id}',[ProductController::class,'delete'])->name('allproducts_delete');

//Update Product
Route::get('allproduct/eidt/{id}',[ProductController::class,'edit'])->name('allproducts_edit');
Route::post('allproduct/update/{id}',[ProductController::class,'update'])->name('allproducts_update');

//view all Categories
Route::get('categories/',[CategoryController::class,'index'])->name('categories_index');
// view one
Route::get('categories/{id}',[CategoryController::class,'viewOne'])->name('categories_viewOne');

//Add New Product
Route::get('categorie/add',[CategoryController::class,'add'])->name('categories_add');
Route::post('categorie/store',[CategoryController::class,'store'])->name('categories_store');

//delete
Route::get('categorie/delconfirm/{id}',[CategoryController::class,'delconfirm'])->name('categories_delconfirm');
Route::get('categorie/delete/{id}',[CategoryController::class,'delete'])->name('categories_delete');

//Update Product
Route::get('categorie/eidt/{id}',[CategoryController::class,'edit'])->name('categories_edit');
Route::post('categorie/update/{id}',[CategoryController::class,'update'])->name('categories_update');
