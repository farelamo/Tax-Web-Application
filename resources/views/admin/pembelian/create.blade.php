@extends('layouts.admin')

@section('content')
	<div class="container-fluid">

		<!-- Page Heading -->
		<div class="d-sm-flex align-items-center justify-content-between mb-4">
			<h1 class="h3 mb-0 text-dark font-weight-bold">Tambah Pembelian</h1>
		</div>

		<div class="row">
			<div class="mx-auto col-12 col-md-8">
				<form action="{{ route('pembelian.store') }}" method="post" enctype="multipart/form-data">
					@csrf

					<p class="text-black font-weight-bold">Lawan Transaksi</p>
					<div class="row mb-2">
						<div class="col-6">
							<label>Nama Lengkap</label>
							<input type="text" class="form-control form-control-solid mb-2" name="fullname" value="{{old('fullname')}}">
							@error('fullname') <span>{{$message}}</span> @enderror
						</div>
						<div class="col-6">
							<label>NPWP</label>
							<input type="number" class="form-control form-control-solid mb-2" name="npwp" value="{{old('npwp')}}">
							@error('npwp') <span>{{$message}}</span> @enderror
						</div>
						<div class="col-6">
							<label>No Telepon</label>
							<input type="number" class="form-control form-control-solid mb-2" name="telp" value="{{old('telp')}}">
							@error('telp') <span>{{$message}}</span> @enderror
						</div>
					</div>
					<hr>

					<p class="text-black font-weight-bold">Alamat</p>
					<div class="row mb-2">
						<div class="col-6">
							<label>Provinsi</label>
							<input type="text" class="form-control form-control-solid mb-2" name="province" value="{{old('province')}}">
							@error('province')
								<span>{{$message}}</span>
							@enderror
						</div>
						<div class="col-6">
							<label>Kota/Kabupaten</label>
							<input type="text" class="form-control form-control-solid mb-2" name="city" value="{{old('city')}}">
							@error('city')
								<span>{{$message}}</span>
							@enderror
						</div>
						<div class="col-6">
							<label>Kecamatan</label>
							<input type="text" class="form-control form-control-solid mb-2" name="subdistrict" value="{{old('subdistrict')}}">
							@error('subdistrict')
								<span>{{$message}}</span>
							@enderror
						</div>
						<div class="col-6">
							<label>Desa/Kelurahan</label>
							<input type="text" class="form-control form-control-solid mb-2" name="village" value="{{old('village')}}">
							@error('village')
								<span>{{$message}}</span>
							@enderror
						</div>
						<div class="col-6">
							<label>Jalan</label>
							<textarea name="address" class="form-control form-control-solid mb-2" id="" rows="5">{{old('address')}}</textarea>
							@error('address')
								<span>{{$message}}</span>
							@enderror
						</div>
						<div class="col-6">
							<label>Kode Pos</label>
							<input type="number" class="form-control form-control-solid mb-2" name="postal_code" value="{{old('postal_code')}}">
							@error('postal_code')
								<span>{{$message}}</span>
							@enderror
						</div>
					</div>
					<hr>

					<p class="text-black font-weight-bold">Detail Transaksi</p>
					<div class="row mb-2">
						<div class="col-6">
							<label>Nama Barang</label>
							<input type="text" class="form-control form-control-solid mb-2" name="goods_name" value="{{old('goods_name')}}">
							@error('goods_name')
								<span>{{$message}}</span>
							@enderror
						</div>
						<div class="col-6">
							<label>Harga Satuan</label>
							<input type="number" class="form-control form-control-solid mb-2" id="up" name="unit_price" value="{{old('unit_price')}}">
							@error('unit_price')
								<span>{{$message}}</span>
							@enderror
						</div>
						<div class="col-6">
							<label>Jumlah Barang</label>
							<input type="number" class="form-control form-control-solid mb-2" id="am" name="amount" value="{{old('amount')}}">
							@error('amount')
								<span>{{$message}}</span>
							@enderror
						</div>
						<div class="col-6">
							<label>Harga Total</label>
							<input type="number" class="form-control form-control-solid mb-2" id="total" name="total" value="{{old('total')}}" readonly>
							@error('total')
								<span>{{$message}}</span>
							@enderror
						</div>
						<div class="col-6">
							<label>Diskon</label>
							<input type="number" class="form-control form-control-solid mb-2" id="ds" name="discount" value="{{old('discount')}}">
							@error('discount')
								<span>{{$message}}</span>
							@enderror
						</div>
					</div>
					<hr>

					<p class="text-black font-weight-bold">Pajak Pertambahan Nilai (PPN)</p>
					<div class="row mb-2">
						<div class="col-6">
							<label for="">DPP</label>
							<input type="number" class="form-control form-control-solid mb-2" id="dpp" name="dpp" value="{{old('dpp')}}" readonly>
							@error('dpp')
								<span>{{$message}}</span>
							@enderror
						</div>
						<div class="col-6">
							<label for="">PPN</label>
							<select name="ppn" id="ppn" class="form-control form-control-solid mb-2">
								<option value="11" @if (old('ppn') == '11') selected @endif>11%</option>
								<option value="10" @if (old('ppn') == '10') selected @endif>10%</option>
							</select>
							@error('ppn')
								<span>{{$message}}</span>
							@enderror
						</div>
						<div class="col-6">
							<label for="">Keterangan</label>
							<select name="desc" id="" class="form-control form-control-solid mb-2">
								<option value="BKP" @if (old('desc') == 'BKP') selected @endif>BKP</option>
								<option value="JKP" @if (old('desc') == 'JKP') selected @endif>JKP</option>
							</select>
							@error('desc')
								<span>{{$message}}</span>
							@enderror
						</div>
						<div class="col-6">
							<label for="">Status</label>
							<select name="status" id="" class="form-control form-control-solid mb-2">
								<option value="paid" @if (old('status') == 'paid') selected @endif>Lunas</option>
								<option value="unpaid" @if (old('status') == 'unpaid') selected @endif>Belum Lunas</option>
							</select>
							@error('status')
								<span>{{$message}}</span>
							@enderror
						</div>
					</div>
					<hr>

					<p class="text-black font-weight-bold">Dokumentasi Berkas</p>
					<div class="row mb-2">
						<div class="col-6">
							<div action="x" class="dropzone">
								<div class="fallback">
									<input type="file" name="file1">
								</div>
							</div>
							@error('file1') <span>{{$message}}</span> @enderror
						</div>
						<div class="col-6">
							<div action="x" class="dropzone">
								<div class="fallback">
									<input type="file" name="file2">
								</div>
							</div>
							@error('file2') <span>{{$message}}</span> @enderror
						</div>
						<div class="col-6">
							<div action="x" class="dropzone">
								<div class="fallback">
									<input type="file" name="file3">
								</div>
							</div>
							@error('file3') <span>{{$message}}</span> @enderror
						</div>
					</div>

					<div class="d-flex">
						<button class="mx-auto btn btn-warning font-weight-bold py-2 px-5"	type="submit">SIMPAN</button>
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection

@section('script')
	@include('partials.admin-hitung')
@endsection