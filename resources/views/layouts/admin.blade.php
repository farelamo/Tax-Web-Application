<!DOCTYPE html>
<html lang="en">

<head>
  @include('partials.admin-head')
</head>

<body id="page-top">

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

    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        @include('partials.admin-sidebar')
        <!-- End of Sidebar -->
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content" style="background: url(/assets/img/bg.png);background-repeat: no-repeat;background-size: 1300px;">
                <!-- Topbar -->
                @include('partials.admin-navbar')
                <!-- End of Topbar -->
                <!-- Begin Page Content -->
                @yield('content')
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->
            <!-- Footer -->
            @include('partials.admin-footer')
            <!-- End of Footer -->
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="/admin/logout">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript-->
    @include('partials.admin-script')
    @yield('script')

</body>

</html>