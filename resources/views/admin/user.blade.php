@extends('layouts.admin')

@section('content')
  <div class="container-fluid">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-800">Data User</h1>
      </div>

      <!-- DataTales Example -->
      <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex">
            <h6 class="font-weight-bold text-primary m-0 py-1">Daftar User</h6>
            <button class="ml-auto btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#tambah">
                <i class="fas fa-plus fa-sm text-white-50"></i> Tambah
						</button>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th style="width: 20px">No</th>
                            <th>Nama</th>
                            <th>Username</th>
                            <th>Role</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $u)
                        <tr>
                          <td>{{ $loop->iteration }}</td>
                          <td>{{ $u->name }}</td>
                          <td>{{ $u->username }}</td>
                          <td>
                            <span class="badge badge-primary">{{ $u->role }}</span>
                          </td>
                          <td>
                            <button class="btn btn-sm btn-success" data-toggle="modal" data-target="#edit" onclick="edit({{$u->id}})"><i class="fa fa-pen"></i></button>
                            <button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#hapus" onclick="hapus({{ $u->id }})"><i class="fa fa-trash"></i></button>
                          </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

  </div>

  <div class="modal fade" id="tambah" tabindex="-1" role="dialog"aria-hidden="true">
    <div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Tambah user</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<form class="form" method="post" action="" enctype="multipart/form-data">
          @csrf
					<div class="modal-body">
            <div class="row mb-2">
              <div class="col-8">
                <label class="required fw-bold mb-2">Nama</label>
                <input type="text" class="form-control" id="name" name="name" required>
              </div>
              <div class="col-4">
                <label class="required fw-bold mb-2">Role</label>
                <select class="form-control" name="role" id="role" required>
                  <option value="admin">Admin</option>
                  <option value="superadmin">Superadmin</option>
                </select>
              </div>
            </div>
            <div class="row mb-2">
              <div class="col-6">
                <label class="required fw-bold mb-2">Username</label>
                <input type="text" class="form-control" id="username" name="username" required>
              </div>
              <div class="col-6">
                <label class="required fw-bold mb-2">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
              </div>
            </div>
					</div>
					<div class="modal-footer">
						<button type="reset" class="btn btn-secondary me-3" data-dismiss="modal">Batal</button>
						<button type="submit" class="btn btn-primary" name="submit" value="store">Submit</button>
					</div>
				</form>

			</div>
    </div>
  </div>

	<div class="modal fade" id="edit" tabindex="-1" role="dialog"aria-hidden="true">
    <div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="et">Edit produk</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<form class="form" method="post" action="" enctype="multipart/form-data">
          @csrf
					<input type="hidden" class="d-none" id="eid" name="id">
					<div class="modal-body">
            <div class="row mb-2">
              <div class="col-8">
                <label class="required fw-bold mb-2">Nama</label>
                <input type="text" class="form-control" id="enm" name="name" required>
              </div>
              <div class="col-4">
                <label class="required fw-bold mb-2">Role</label>
                <select class="form-control" name="role" id="erl" required>
                  <option value="admin">Admin</option>
                  <option value="superadmin">Superadmin</option>
                </select>
              </div>
            </div>
            <div class="row mb-2">
              <div class="col-5">
                <label class="required fw-bold mb-2">Username</label>
                <input type="text" class="form-control" id="eun" name="username" required>
              </div>
              <div class="col-7">
                <label class="required fw-bold mb-2">Password</label>
                <input type="password" class="form-control" name="password">
                <sup class="text-danger">*Kosongkan jika tidak ingin mengganti password</sup>
              </div>
            </div>
					</div>
					<div class="modal-footer">
						<button type="reset" class="btn btn-secondary me-3" data-dismiss="modal">Batal</button>
						<button type="submit" class="btn btn-primary" name="submit" value="update">Simpan</button>
					</div>
				</form>

			</div>
    </div>
  </div>

	<div class="modal fade" id="hapus" tabindex="-1" role="dialog"aria-hidden="true">
    <div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Hapus user</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<form class="form" method="post" action="">
          @csrf
					<input type="hidden" class="d-none" id="hi" name="id">
					<div class="modal-body">
            <p id="hd">
              Apakah anda yakin ingin menghapus user ini?
            </p>
					</div>
					<div class="modal-footer">
						<button type="reset" class="btn btn-secondary me-3" data-dismiss="modal">Batal</button>
						<button type="submit" class="btn btn-danger" name="submit" value="destroy">Hapus</button>
					</div>
				</form>

			</div>
    </div>
  </div>
@endsection

@section('script')
<script>
	function edit(id){
		$.ajax({
			url: "/api/user/"+id,
			type: 'GET',
			dataType: 'json', // added data type
			success: function(response) {
        var mydata = response.data;
				$("#eid").val(id);
				$("#enm").val(mydata.name);
				$("#erl").val(mydata.role);
				$("#eun").val(mydata.username);
				$("#et").text("Edit "+mydata.name);
			}
		});
	}
	function hapus(id){
		$.ajax({
			url: "/api/user/"+id,
			type: 'GET',
			dataType: 'json', // added data type
			success: function(response) {
        var mydata = response.data;
				$("#hi").val(id);
				$("#hd").text("Apakah anda yakin ingin menghapus "+mydata.name+"?");
			}
		});
	}
</script>
@endsection