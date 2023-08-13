<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\BookingDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminBooking extends Controller
{
    
    public function index(){
        return view('admin.booking',[
            "bookings" => Booking::all(),
            "title" => "Admin | Data Booking",
        ]);
    }

    public function postHandler(Request $request){
        if($request->submit=="update"){
            $res = $this->update($request);
            return redirect('/admin/booking')->with($res['status'],$res['message']);
        }
        if($request->submit=="destroy"){
            $res = $this->destroy($request);
            return redirect('/admin/booking')->with($res['status'],$res['message']);
            //return redirect('/admin/category')->with("info","Fitur hapus sementara dinonaktifkan");
        }else{
            return redirect('/admin/booking')->with("info","Submit not found");
        }
    }

    public function update(Request $request){
        $validatedData = $request->validate([
            'code'=>'required',
            'name' => 'required',
            'phone' => 'required',
        ]);
        $validatedData['status'] = $request->status;

        $booking = Booking::whereCode($request->code)->first();
        
        //Check if booking is found
        if($booking){
            // Update booking
            $booking->update($validatedData);   
            return ['status'=>'success','message'=>'Booking berhasil diedit']; 
        }else{
            return ['status'=>'error','message'=>'Booking tidak ditemukan'];
        }
    }

    public function destroy(Request $request){
        
        $validatedData = $request->validate([
            'code'=>'required',
        ]);

        $booking = Booking::whereCode($request->code)->first();
        $booking_details = BookingDetail::whereCode($request->code);

        //Check if booking is found
        if($booking){
            // Delete booking
            $booking->delete();
            $booking_details->delete();
            return ['status'=>'success','message'=>'Booking berhasil dihapus'];
        }else{
            return ['status'=>'error','message'=>'Booking tidak ditemukan'];
        }
    }
}
