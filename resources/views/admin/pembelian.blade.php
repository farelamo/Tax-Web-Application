@extends('layouts.admin')

@section('content')
  <div class="container-fluid">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-800">Pembelian</h1>
      </div>

      <!-- DataTales Example -->
      <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex">
            <h6 class="font-weight-bold text-primary m-0 py-1">Data Pembelian</h6>
            <button class="ml-auto btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#tambah">
                <i class="fas fa-plus fa-sm text-white-50"></i> Tambah
						</button>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
														<th>name</th>
														<th>no_tax</th>
														<th>fullname</th>
														<th>npwp</th>
														<th>telp</th>
														<th>province</th>
														<th>city</th>
														<th>subdistrict</th>
														<th>village</th>
														<th>address</th>
														<th>postal_code</th>
														<th>goods_name</th>
														<th>unit_price</th>
														<th>amount</th>
														<th>total</th>
														<th>discount</th>
														<th>dpp</th>
														<th>ppn</th>
														<th>desc</th>
														<th>status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pembelian as $p)
                        <tr>
                            <td>{{ $p->name }}</td>
														<td>{{ $p->no_tax }}</td>
														<td>{{ $p->fullname }}</td>
														<td>{{ $p->npwp }}</td>
														<td>{{ $p->telp }}</td>
														<td>{{ $p->province }}</td>
														<td>{{ $p->city }}</td>
														<td>{{ $p->subdistrict }}</td>
														<td>{{ $p->village }}</td>
														<td>{{ $p->address }}</td>
														<td>{{ $p->postal_code }}</td>
														<td>{{ $p->goods_name }}</td>
														<td>{{ $p->unit_price }}</td>
														<td>{{ $p->amount }}</td>
														<td>{{ $p->total }}</td>
														<td>{{ $p->discount }}</td>
														<td>{{ $p->dpp }}</td>
														<td>{{ $p->ppn }}</td>
														<td>{{ $p->desc }}</td>
														<td>{{ $p->status }}</td>
                            <td>
                              <button class="btn btn-sm btn-success" data-toggle="modal" data-target="#edit" onclick="edit({{$p->id}})"><i class="fa fa-pen"></i></button>
                              <button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#hapus" onclick="hapus({{ $p->id }})"><i class="fa fa-trash"></i></button>
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
					<h5 class="modal-title">Tambah kategori</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<form class="form" method="post" action="">
          @csrf
					<div class="modal-body">
						<div class="row mb-2">
              <div class="col-12">
                <label class="required fw-bold mb-2">Nama kategori</label>
								<input type="text" class="form-control" id="name" name="name" required>
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
					<h5 class="modal-title" id="et">Edit kategori</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<form class="form" method="post" action="">
          @csrf
					<input type="hidden" class="d-none" id="eid" name="id">
					<div class="modal-body">
						<div class="row mb-2">
              <div class="col-12">
                <label class="required fw-bold mb-2">Nama kategori</label>
								<input type="text" class="form-control" id="enm" name="name" required>
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
					<h5 class="modal-title">Hapus kategori</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<form class="form" method="post" action="">
          @csrf
					<input type="hidden" class="d-none" id="hi" name="id">
					<div class="modal-body" id="hd">
						Apakah anda yakin ingin menghapus kategori ini?
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
			url: "/api/category/"+id,
			type: 'GET',
			dataType: 'json', // added data type
			success: function(response) {
        var mydata = response.data;
				$("#eid").val(id);
				$("#enm").val(mydata.name);
        $("#et").text("Edit "+mydata.name);
			}
		});
	}
	function hapus(id){
		$.ajax({
			url: "/api/category/"+id,
			type: 'GET',
			dataType: 'json', // added data type
			success: function(response) {
        var mydata = response.data;
				$("#hi").val(id);
				$("#hd").text("Apakah anda yakin ingin menghapus kategori "+mydata.name+"?");
			}
		});
	}
</script>
@endsection