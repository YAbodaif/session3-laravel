<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
class ProductController extends Controller
{

    //View
    public function index(){
       $products= Product::orderBy('id','DESC')->paginate(6);
       return view ('allproducts.index',compact('products'));
    }
    public function viewOne($id){
        $product= Product::findorFail($id);
        return view('allproducts.viewone',compact('product'));
    }

    //Add New
    public function add(){
        $cats=Category::get();
        return view('allproducts.add',compact('cats'));
    }

    public function Store(Request $request){
        $request->validate([
            'title'=>'required | string | max:100',
            'description'=>'required | string ',
            'price'=>'required |  numeric ',
            'category'=>'required | string | max:100',
            'img'=>'required |image | mimes:jpg,jpeg,png,bmp | max:2048 | min:1 ',
        ]);
        $ext=$request->file('img')->getClientOriginalExtension();
        $imgName='Product-' . uniqid() . ".$ext";
        $x=Product::create([
            'title'=>$request->title,
            'description'=>$request->description,
            'price'=>$request->price,
            'category'=>$request->category,
            'img'=>$imgName,
        ]);
        $x->categories()->sync($request->category);
        $request->file('img')->move(public_path('uploads/products/'),$imgName);

        return redirect(route('allproducts_index'));
    }
//delete
    public function delconfirm($id){
        $product= Product::findorFail($id);
        return view('allproducts.delconfirm',compact('product'));
    }

    public function delete($id){
        $product= Product::findorFail($id);
        $img=$product->img;
        $product->delete();
        unlink(public_path('uploads/products/') .$img );
        return redirect(route('allproducts_index'));
    }


    public function edit($id){
        $product= Product::findorFail($id);
        return view('allproducts.edit',compact('product'));
    }

    public function update(Request $request,$id){
        $request->validate([
            'title'=>'required | string | max:100',
            'description'=>'required | string ',
            'price'=>'required |  numeric ',
            'category'=>'required | string | max:100',
            'img'=>'nullable |image | mimes:jpg,jpeg,png,bmp | max:2048 | min:1 ',
        ]);
        $imgName="";
        $product=Product::findorFail($id);
        if($request->hasFile('img')){
            $ext=$request->file('img')->getClientOriginalExtension();
            $imgName='Product-' . uniqid() . ".$ext";
            $request->file('img')->move(public_path('uploads/products/'),$imgName);
            unlink(public_path('uploads/products/') . $product->img );
        }else{
        $imgName=$product->img;
        }
        
        Product::create([
            'title'=>$request->title,
            'description'=>$request->description,
            'price'=>$request->price,
            'category'=>$request->category,
            'img'=>$imgName,
        ]);

        return redirect(route('allproducts_index'));
    }
}
