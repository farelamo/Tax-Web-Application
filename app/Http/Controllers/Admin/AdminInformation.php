<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Information;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminInformation extends Controller
{
    
    public function index(){
        return view('admin.information',[
            "informations" => Information::all(),
            "title" => "Admin | Informasi",
        ]);
    }

    public function postHandler(Request $request){
        if($request->submit=="store"){
            $res = $this->store($request);
            return redirect('/admin/information')->with($res['status'],$res['message']);
        }
        if($request->submit=="update"){
            $res = $this->update($request);
            return redirect('/admin/information')->with($res['status'],$res['message']);
        }
        if($request->submit=="destroy"){
            $res = $this->destroy($request);
            return redirect('/admin/information')->with($res['status'],$res['message']);
            // return redirect('/admin/announcement')->with("info","Fitur hapus sementara dinonaktifkan");
        }else{
            return redirect('/admin/information')->with("info","Submit not found");
        }
    }

    public function store(Request $request){
        
        $validatedData = $request->validate([
            'title' => 'required',
            'body' => 'required',
            'image' => 'required|image|file|max:1024',
        ]);

        if($request->file('image')){
            $validatedData['image'] = time().".png";
            $request->file('image')->move(public_path('assets/img/information'), $validatedData['image']);
            Information::create($validatedData);
            return ['status'=>'success','message'=>'Informasi berhasil ditambahkan']; 
        }
    }

    public function update(Request $request){
        $validatedData = $request->validate([
            'id' => 'required|numeric',
            'title' => 'required',
            'body' => 'required',
        ]);
        
        $information = Information::find($request->id);

        //Check if information is found
        if($information){
            
            //Check if has image
            if($request->file('image')){
                
                $validatedData = $request->validate([
                    'title' => 'required',
                    'body' => 'required',
                    'image' => 'required|image|file|max:1024',
                ]);

                // Check if information image is not empty
                if ($information->image) {
                    // Delete old image
                    $img_path = public_path().'/assets/img/information/'.$information->image;
                    if(file_exists($img_path)){unlink($img_path);}
                }
                
                // Upload new image
                $validatedData['image'] = time().".png";
                $request->file('image')->move(public_path('assets/img/information'), $validatedData['image']);
                $information->update($validatedData);
                return ['status'=>'success','message'=>'Informasi berhasil diupdate']; 
            }else{
                $information->update($validatedData);
                return ['status'=>'success','message'=>'Informasi berhasil diupdate']; 
            }
        }else{
            return ['status'=>'error','message'=>'Informasi tidak ditemukan'];
        }
    }

    public function destroy(Request $request){
        
        $validatedData = $request->validate([
            'id'=>'required|numeric',
        ]);

        $information = Information::find($request->id);

        //Check if the information is found
        if($information){
            // Check if information image is not empty
            if ($information->image) {
                // Delete old image
                $img_path = public_path().'/assets/img/information/'.$information->image;
                if(file_exists($img_path)){unlink($img_path);}
            }
            // Delete information
            Information::destroy($request->id);
            return ['status'=>'success','message'=>'Informasi berhasil dihapus'];
        }else{
            return ['status'=>'error','message'=>'Informasi tidak ditemukan'];
        }
    }
}
