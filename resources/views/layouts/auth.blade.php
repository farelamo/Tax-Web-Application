<!DOCTYPE html>
<html lang="en">

<head>
  @include('partials.admin-head')
  @yield('head')
</head>

<body
  @if (Request::is('/') || Request::is('register'))
    style="
      background-color: #4e73df;
      background-image: linear-gradient(180deg, #4e73df 10%, #224abe 100%);
      background-size: cover;
    "
  @else
    style="
      background: url(/assets/img/bg.png);
      background-repeat: no-repeat;
      background-size: 100%;
      background-color: white;
    "
  @endif
>
  <script>
    @if(session()->has('success'))
      Swal.fire({title:'Berhasil', text:'{{session('success')}}', icon:'success'})
    @endif
    @if(session()->has('error'))
      Swal.fire({title:'Error!', text:'{{session('error')}}', icon:'error'})
    @endif
    @if(session()->has('info'))
      Swal.fire({title:'Info', text:'{{session('info')}}', icon:'info'})
    @endif
    @if($errors->any())
      Swal.fire({title:'Error!', html:'{!! implode('', $errors->all(':message<br>')) !!}', icon:'error'})
    @endif
  </script>

    <div class="container">
      @yield('content')
    </div>

    @include('partials.admin-script')
    @yield('script')

</body>

</html>