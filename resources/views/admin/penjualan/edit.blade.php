@extends('layouts.admin')

@section('content')
	<div class="container-fluid">
		<form action="{{ route('penjualan.update', ['penjualan' => $data->id]) }}" method="post" enctype="multipart/form-data">
			@csrf
			@method('PUT')

            <div>
				<label for="">Tanggal Dokumen</label>
				<input type="date" name="document_date" value="{{old('document_date') ?? $data->document_date}}">
				@error('document_date')
					<span>{{$message}}</span>
				@enderror
			</div>
            <div>
				<label for="">Masa Pajak</label>
				<input type="date" name="tax_period" value="{{old('tax_period') ?? $data->tax_period}}">
				@error('tax_period')
					<span>{{$message}}</span>
				@enderror
			</div>
            <div>
				<label for="">Tahun Pajak</label>
				<input type="date" name="tax_year" value="{{old('tax_year') ?? $data->tax_year}}">
				@error('tax_year')
					<span>{{$message}}</span>
				@enderror
			</div>
            <hr>
			<div>
				<label for="">Nama Lengkap</label>
				<input type="text" name="fullname" value="{{old('fullname') ?? $data->fullname}}">
				@error('fullname')
					<span>{{$message}}</span>
				@enderror
			</div>
			<div>
				<label for="">NPWP</label>
				<input type="number" name="npwp" value="{{old('npwp') ?? $data->npwp}}">
				@error('npwp')
					<span>{{$message}}</span>
				@enderror
			</div>
			<div>
				<label for="">Nomor Telp</label>
				<input type="number" name="telp" value="{{old('telp') ?? $data->telp}}">
				@error('telp')
					<span>{{$message}}</span>
				@enderror
			</div>
			<hr>
			<div>
				<label for="">Provinsi</label>
				<input type="text" name="province" value="{{old('province') ?? $data->province}}">
				@error('province')
					<span>{{$message}}</span>
				@enderror
			</div>
			<div>
				<label for="">kota</label>
				<input type="text" name="city" value="{{old('city') ?? $data->city}}">
				@error('city')
					<span>{{$message}}</span>
				@enderror
			</div>
			<div>
				<label for="">kecamtan</label>
				<input type="text" name="subdistrict" value="{{old('subdistrict') ?? $data->subdistrict}}">
				@error('subdistrict')
					<span>{{$message}}</span>
				@enderror
			</div>
			<div>
				<label for="">Desa</label>
				<input type="text" name="village" value="{{old('village')  ?? $data->village}}">
				@error('village')
					<span>{{$message}}</span>
				@enderror
			</div>
			<div>
				<label for="">Jalan</label>
				<textarea name="address" id="" cols="30" rows="10">{{old('address') ?? $data->address}}</textarea>
				@error('address')
					<span>{{$message}}</span>
				@enderror
			</div>
			<div>
				<label for="">Kode Pos</label>
				<input type="number" name="postal_code" value="{{old('postal_code') ?? $data->postal_code}}">
				@error('postal_code')
					<span>{{$message}}</span>
				@enderror
			</div>
			<hr>
			<div>
				<label for="">Nama Barang</label>
				<input type="text" name="goods_name" value="{{old('goods_name') ?? $data->goods_name}}">
				@error('goods_name')
					<span>{{$message}}</span>
				@enderror
			</div>
			<div>
				<label for="">Harga Satuan</label>
				<input type="number" name="unit_price" value="{{old('unit_price') ?? $data->unit_price}}">
				@error('unit_price')
					<span>{{$message}}</span>
				@enderror
			</div>
			<div>
				<label for="">Amount</label>
				<input type="number" name="amount" value="{{old('amount') ?? $data->amount}}">
				@error('amount')
					<span>{{$message}}</span>
				@enderror
			</div>
			<div>
				<label for="">Total</label>
				<input type="number" name="total" value="{{old('total') ?? $data->total}}">
				@error('total')
					<span>{{$message}}</span>
				@enderror
			</div>
			<div>
				<label for="">Discount</label>
				<input type="number" name="discount" value="{{old('discount') ?? $data->discount}}">
				@error('discount')
					<span>{{$message}}</span>
				@enderror
			</div>
			<hr>
			<div>
				<label for="">DPP</label>
				<input type="number" name="dpp" value="{{old('dpp') ?? $data->dpp}}">
				@error('dpp')
					<span>{{$message}}</span>
				@enderror
			</div>
			<div>
				<label for="">PPN</label>
				<select name="ppn" id="">
					<option value="11" @if (old('ppn') ?? $data->ppn == '11') selected @endif>11%</option>
					<option value="10" @if (old('ppn') ?? $data->ppn == '10') selected @endif>10%</option>
				</select>
				@error('ppn')
					<span>{{$message}}</span>
				@enderror
			</div>
			<div>
				<label for="">Keterangan</label>
				<select name="desc" id="">
					<option value="BKP" @if (old('desc') ?? $data->desc == 'BKP') selected @endif>BKP</option>
					<option value="JKP" @if (old('desc') ?? $data->desc == 'JKP') selected @endif>JKP</option>
				</select>
				@error('desc')
					<span>{{$message}}</span>
				@enderror
			</div>
			<div>
				<label for="">Status</label>
				<select name="status" id="">
					<option value="paid" @if (old('status') ?? $data->status == 'paid') selected @endif>Lunas</option>
					<option value="unpaid" @if (old('status') ?? $data->status == 'unpaid') selected @endif>Belum Lunas</option>
				</select>
				@error('status')
					<span>{{$message}}</span>
				@enderror
			</div>
			<hr>
			<div>
				<label for="">File 1</label>
				<input type="file" name="file1">
				@error('file1')
					<span>{{$message}}</span>
				@enderror
			</div>
			<div>
				<label for="">File 2</label>
				<input type="file" name="file2">
				@error('file2')
					<span>{{$message}}</span>
				@enderror
			</div>
			<div>
				<label for="">File 3</label>
				<input type="file" name="file3">
				@error('file3')
					<span>{{$message}}</span>
				@enderror
			</div>
			<button type="submit">Submit</button>
		</form>
	</div>
@endsection