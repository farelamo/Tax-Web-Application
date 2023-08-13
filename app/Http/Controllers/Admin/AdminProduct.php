<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminProduct extends Controller
{
    
    public function index(){
        return view('admin.product',[
            "categories" => Category::all(),
            "products" => Product::all(),
            "title" => "Admin | Data Produk",
        ]);
    }

    public function postHandler(Request $request){
        if($request->submit=="store"){
            $res = $this->store($request);
            return redirect('/admin/product')->with($res['status'],$res['message']);
        }
        if($request->submit=="update"){
            $res = $this->update($request);
            return redirect('/admin/product')->with($res['status'],$res['message']);
        }
        if($request->submit=="destroy"){
            $res = $this->destroy($request);
            return redirect('/admin/product')->with($res['status'],$res['message']);
            // return redirect('/admin/product')->with("info","Fitur hapus sementara dinonaktifkan");
        }else{
            return redirect('/admin/product')->with("info","Submit not found");
        }
    }

    public function store(Request $request){
        
        $validatedData = $request->validate([
            'category_id' => 'required|numeric',
            'name' => 'required',
            'price' => 'required|numeric',
            'unit' => 'required',
            'stock' => 'required|numeric',
            'image' => 'required|image|file|max:1024',
        ]);

        if($request->file('image')){
            $validatedData['image'] = time().".png";
            $request->file('image')->move(public_path('assets/img/product'), $validatedData['image']);
            Product::create($validatedData);
            return ['status'=>'success','message'=>'Produk berhasil ditambahkan']; 
        }
    }

    public function update(Request $request){
        $validatedData = $request->validate([
            'id' => 'required|numeric',
            'category_id' => 'required|numeric',
            'name' => 'required',
            'price' => 'required|numeric',
            'unit' => 'required',
            'stock' => 'required|numeric',
        ]);
        
        $product = Product::find($request->id);
        
        //Check if product is found
        if($product){
            
            //Check if has image
            if($request->file('image')){
                
                $validatedData = $request->validate([
                    'category_id' => 'required|numeric',
                    'name' => 'required',
                    'price' => 'required|numeric',
                    'unit' => 'required',
                    'stock' => 'required|numeric',
                    'image' => 'required|image|file|max:1024',
                ]);

                // Delete old image
                $img_path = public_path().'/assets/img/product/'.$product->image;
                if($product->image&&file_exists($img_path)){unlink($img_path);}
                
                // Upload new image
                $validatedData['image'] = time().".png";
                $request->file('image')->move(public_path('assets/img/product'), $validatedData['image']);
                
                // Update product
                $product->update($validatedData);

                return ['status'=>'success','message'=>'Produk berhasil diupdate']; 
            }else{
                $product->update($validatedData);
                return ['status'=>'success','message'=>'Produk berhasil diupdate']; 
            }
        }else{
            return ['status'=>'error','message'=>'Produk tidak ditemukan'];
        }
    }

    public function destroy(Request $request){
        
        $validatedData = $request->validate([
            'id'=>'required|numeric',
        ]);

        $product = Product::find($request->id);

        //Check if the product is found
        if($product){
            //Check if the product image is not empty
            if($product->image){
                // Delete image
                $img_path = public_path().'/assets/img/product/'.$product->image;
                if(file_exists($img_path)){unlink($img_path);}
            }
            
            // Delete product
            Product::destroy($request->id);
            
            return ['status'=>'success','message'=>'Produk berhasil dihapus'];
        }else{
            return ['status'=>'error','message'=>'Produk tidak ditemukan'];
        }
    }
}
