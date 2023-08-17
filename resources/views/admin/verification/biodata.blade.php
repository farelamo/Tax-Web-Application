@extends('layouts.auth')

@section('content')

    <div class="d-flex justify-content-center justify-content-md-start" style="margin-top: 5%;">
        <p class="col-md-12 mt-5 text-black font-weight-bold" 
            style="border-bottom: 3px solid black; max-width: 27%; width: 100%">
            Biodata PKP
        </p>
    </div>

    <form action="" method="post" class="mt-4">
        @csrf
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <label>Nama PKP</label>
                <input type="text" class="form-control form-control-solid mb-2" name="fullname" value="{{old('fullname')}}">
                @error('fullname')
                    <span>{{$message}}</span>
                @enderror
            </div>
            <div class="col-12 col-md-6">
                <label>NPWP</label>
                <input type="number" class="form-control form-control-solid mb-2" name="npwp" value="{{old('npwp')}}">
                @error('npwp')
                    <span>{{$message}}</span>
                @enderror
            </div>
            <div class="col-12 col-md-6">
                <label>Email</label>
                <input type="email" class="form-control form-control-solid mb-2" name="email" value="{{old('email')}}">
                @error('email')
                    <span>{{$message}}</span>
                @enderror
            </div>
            <div class="col-12 col-md-6">
                <label>No Telepon</label>
                <input type="number" class="form-control form-control-solid mb-2" name="telp" value="{{old('telp')}}">
                @error('telp')
                    <span>{{$message}}</span>
                @enderror
            </div>
            <p class="col-12 col-md-6 mt-5 text-black font-weight-bold">Alamat Lengkap</p>
            <div class="col-12 col-md-6"></div>
            <div class="col-12 col-md-6">
                <label>Provinsi</label>
                <input type="text" class="form-control form-control-solid mb-2" name="province" value="{{old('province')}}">
                @error('province')
                    <span>{{$message}}</span>
                @enderror
            </div>
            <div class="col-12 col-md-6">
                <label>Kota/Kabupaten</label>
                <input type="text" class="form-control form-control-solid mb-2" name="city" value="{{old('city')}}">
                @error('city')
                    <span>{{$message}}</span>
                @enderror
            </div>
            <div class="col-12 col-md-6">
                <label>Kecamatan</label>
                <input type="text" class="form-control form-control-solid mb-2" name="subdistrict" value="{{old('subdistrict')}}">
                @error('subdistrict')
                    <span>{{$message}}</span>
                @enderror
            </div>
            <div class="col-12 col-md-6">
                <label>Desa/Kelurahan</label>
                <input type="text" class="form-control form-control-solid mb-2" name="village" value="{{old('village')}}">
                @error('village')
                    <span>{{$message}}</span>
                @enderror
            </div>
            <div class="col-12">
                <label>Alamat Lengkap</label>
                <textarea name="address" class="form-control form-control-solid mb-2" id="" rows="5">{{old('address')}}</textarea>
                @error('address')
                    <span>{{$message}}</span>
                @enderror
            </div>
        </div>
        <div class="d-flex">
            <button class="mx-auto btn btn-warning font-weight-bold py-2 px-5 mt-4" type="submit">SIMPAN</button>
        </div>
    </form>
@endsection
