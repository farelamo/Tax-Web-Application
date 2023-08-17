@extends('layouts.auth')

@section('content')

    <div class="d-flex justify-content-center justify-content-md-start" style="margin-top: 5%;">
        <p class="col-md-12 mt-5 text-black font-weight-bold" 
            style="border-bottom: 3px solid black; max-width: 27%; width: 100%">
            Aktivasi Akun
        </p>
    </div>

    <form action="" method="post" enctype="multipart/form-data" class="mt-4">
        @csrf
        <div class="row justify-content-center">
            <div class="col-6">
                <label>Foto Dokumen KTP</label>
                <div action="x" class="dropzone">
                    <div class="fallback">
                        <input type="file" name="ktp">
                    </div>
                </div>
                @error('ktp') <span>{{$message}}</span> @enderror
            </div>
            <div class="col-6">
                <label>Foto Selfie Bersama KTP</label>
                <div action="x" class="dropzone">
                    <div class="fallback">
                        <input type="file" name="selfie_ktp">
                    </div>
                </div>
                @error('selfie_ktp') <span>{{$message}}</span> @enderror
            </div>
            <div class="col-6">
                <label>Foto Dokumen NPWP Perusahaan</label>
                <div action="x" class="dropzone">
                    <div class="fallback">
                        <input type="file" name="npwp">
                    </div>
                </div>
                @error('npwp') <span>{{$message}}</span> @enderror
            </div>
            <div class="col-6">
                <label>Foto Sefie Bersama Dokumen NPWP Perusahaan</label>
                <div action="x" class="dropzone">
                    <div class="fallback">
                        <input type="file" name="selfie_npwp">
                    </div>
                </div>
                @error('selfie_npwp') <span>{{$message}}</span> @enderror
            </div>
            <div class="col-6">
                <label>Foto Dokumen Akta Pendirian Perusahaan</label>
                <div action="x" class="dropzone">
                    <div class="fallback">
                        <input type="file" name="akta_pendirian_perusahaan">
                    </div>
                </div>
                @error('akta_pendirian_perusahaan') <span>{{$message}}</span> @enderror
            </div>
            <div class="col-6">
                <label>Foto Selfie Bersama Akta Pendirian Perusahaan</label>
                <div action="x" class="dropzone">
                    <div class="fallback">
                        <input type="file" name="selfie_akta_pendirian_perusahaan">
                    </div>
                </div>
                @error('selfie_akta_pendirian_perusahaan') <span>{{$message}}</span> @enderror
            </div>
        </div>
        <div class="d-flex">
            <button class="mx-auto btn btn-warning font-weight-bold py-2 px-5 mt-4" type="submit">SIMPAN</button>
        </div>
    </form>
@endsection
