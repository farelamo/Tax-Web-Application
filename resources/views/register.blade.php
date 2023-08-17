@extends('layouts.auth')

@section('content')
    <!-- Outer Row -->
    <div class="row justify-content-center" style="margin-top: 25%">

        <div class="col-12 col-lg-6">
            <img class="img-fluid" src="{{ asset('assets/img/login.png') }}" alt="Gambar Auth" style="margin-top: 5rem">
        </div>

        <div class="col-12 col-lg-6">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-12">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Create Account</h1>
                                </div>
                                <form class="user" method="post">
                                    @csrf

                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" name="email"
                                            placeholder="Enter Email...">
                                            @error('email')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" name="password"
                                            placeholder="Password">
                                            @error('password')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user"
                                            name="confirm_password" placeholder="Konfirmasi Password">
                                            @error('confirm_password')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                    </div>
                                    <div class="form-group">
                                        <select name="role">
                                            <option value="">-- Pilih --</option>
                                            <option value="PKP">Perusahaan Kena Pajak (PKP)</option>
                                            <option value="AR">Account Representative (AR)</option>
                                        </select>
                                        @error('role')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <button class="btn btn-primary btn-user btn-block" type="submit">
                                        Register
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
