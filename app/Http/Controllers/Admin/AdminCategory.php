<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminCategory extends Controller
{
    
    public function index(){
        return view('admin.category',[
            "categories" => Category::all(),
            "title" => "Admin | Kategori Produk",
        ]);
    }

    public function postHandler(Request $request){
        if($request->submit=="store"){
            $res = $this->store($request);
            return redirect('/admin/category')->with($res['status'],$res['message']);
        }
        if($request->submit=="update"){
            $res = $this->update($request);
            return redirect('/admin/category')->with($res['status'],$res['message']);
        }
        if($request->submit=="destroy"){
            //$res = $this->destroy($request);
            //return redirect('/admin/category')->with($res['status'],$res['message']);
            return redirect('/admin/category')->with("info","Fitur hapus sementara dinonaktifkan");
        }else{
            return redirect('/admin/category')->with("info","Submit not found");
        }
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'name'=>'required',
        ]);

        // Create new category
        Category::create($validatedData);
        return ['status'=>'success','message'=>'Kategori berhasil ditambahkan'];
    }

    public function update(Request $request){
        $validatedData = $request->validate([
            'id'=>'required|numeric',
            'name' => 'required',
        ]);

        $category = Category::find($request->id);
        
        //Check if category is found
        if($category){
            // Update category
            $category->update($validatedData);   
            return ['status'=>'success','message'=>'Kategori berhasil diedit']; 
        }else{
            return ['status'=>'error','message'=>'Kategori tidak ditemukan'];
        }
    }

    public function destroy(Request $request){
        
        $validatedData = $request->validate([
            'id'=>'required|numeric',
        ]);

        $category = Category::find($request->id);

        //Check if category is found
        if($category){
            Category::destroy($request->id);    // Delete category
            return ['status'=>'success','message'=>'Kategori berhasil dihapus'];
        }else{
            return ['status'=>'error','message'=>'Kategori tidak ditemukan'];
        }
    }
}
