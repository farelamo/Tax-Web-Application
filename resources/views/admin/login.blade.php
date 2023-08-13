@extends('layouts.auth')

@section('content')
  <!-- Outer Row -->
  <div class="row justify-content-center">

    <div class="col-12 col-md-6">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-12">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                            </div>
                            <form class="user" method="post">
                                @csrf
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="username" placeholder="Enter Username...">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user" name="password" placeholder="Password">
                                </div>
                                <button class="btn btn-primary btn-user btn-block" type="submit">
                                    Login
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