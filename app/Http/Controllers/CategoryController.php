<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
class CategoryController extends Controller
{
    //View
    public function index(){
        $categories= Category::orderBy('id','DESC')->paginate(6);
        return view ('categories.index',compact('categories'));
     }
     public function viewOne($id){
         $category= Category::findorFail($id);
         return view('categories.viewone',compact('category'));
     }
 
     //Add New
     public function add(){
         return view('categories.add');
     }
 
     public function Store(Request $request){
         $request->validate([
             'name'=>'required | string | max:100',
         ]);
         Category::create([
             'name'=>$request->name,
         ]);
         return redirect(route('categories_index'));
     }
 //delete
     public function delconfirm($id){
         $category= Category::findorFail($id);
         return view('categories.delconfirm',compact('category'));
     }
 
     public function delete($id){
         $category= Category::findorFail($id)->delete();
         return redirect(route('categories_index'));
     }
 
 
     public function edit($id){
         $category= category::findorFail($id);
         return view('categories.edit',compact('category'));
     }
 
     public function update(Request $request,$id){
         $request->validate([
             'name'=>'required | string | max:100',
         ]);       
         Category::create([
             'name'=>$request->title,
         ]);
 
         return redirect(route('categories_index'));
     }
 }
 