@extends('layouts.admin')

@section('content')
	<div class="container-fluid">
		<form action="">
            <div>
				<label for="">Tanggal Dokumen</label>
				<input type="date" name="document_date">
			</div>
            <div>
				<label for="">Masa Pajak</label>
				<input type="date" name="tax_period">
			</div>
            <div>
				<label for="">Tahun Pajak</label>
				<input type="date" name="tax_year">
			</div>
            <hr>
			<div>
				<label for="">Nama Lengkap</label>
				<input type="text" name="fullname">
			</div>
			<div>
				<label for="">NPWP</label>
				<input type="number" name="npwp">
			</div>
			<div>
				<label for="">Nomor Telp</label>
				<input type="text" name="telp">
			</div>
			<hr>
			<div>
				<label for="">Provinsi</label>
				<input type="text" name="province">
			</div>
			<div>
				<label for="">kota</label>
				<input type="text" name="city">
			</div>
			<div>
				<label for="">kota</label>
				<input type="text" name="city">
			</div>
			<div>
				<label for="">kecamtan</label>
				<input type="text" name="subdistrict">
			</div>
			<div>
				<label for="">Desa</label>
				<input type="text" name="village">
			</div>
			<div>
				<label for="">jalan</label>
				<textarea name="address" id="" cols="30" rows="10"></textarea>
			</div>
			<div>
				<label for="">Desa</label>
				<input type="text" name="postal_code">
			</div>
			<hr>
			<div>
				<label for="">Nama Barang</label>
				<input type="text" name="goods_name">
			</div>
			<div>
				<label for="">Harga Satuan</label>
				<input type="number" name="unit_price">
			</div>
			<div>
				<label for="">Amount</label>
				<input type="number" name="amount">
			</div>
			<div>
				<label for="">Total</label>
				<input type="number" name="total">
			</div>
			<div>
				<label for="">Discount</label>
				<input type="number" name="discount">
			</div>
			<hr>
			<div>
				<label for="">DPP</label>
				<input type="number" name="dpp">
			</div>
			<div>
				<label for="">PPN</label>
				<select name="ppn" id="">
					<option value="11">11%</option>
					<option value="10">10%</option>
				</select>
			</div>
			<div>
				<label for="">Keterangan</label>
				<select name="desc" id="">
					<option value="BKP">BKP</option>
					<option value="JKP">JKP</option>
				</select>
			</div>
			<hr>
			<div>
				<label for="">File 1</label>
				<input type="file" name="file1">
			</div>
			<div>
				<label for="">File 2</label>
				<input type="file" name="file2">
			</div>
			<div>
				<label for="">File 3</label>
				<input type="file" name="file3">
			</div>
		</form>
	</div>
@endsection