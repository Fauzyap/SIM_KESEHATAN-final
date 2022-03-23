@extends('templates/laporan_temp')

@section('container')

<div class="container">
	<style>
		@media print {
		.print{
			display: none;
		}
	}
	</style>
	<div class="text-center">
		<br>
			<h1 align="center" style="color: black;"><img src="../image/1.png" style="height: 50px; padding-bottom: 10px;">SIM KESEHATAN SMK WIKRAMA BOGOR</h1>
			<p align="center" style="color: black;"> Jl. Raya Wangun No.21, RT.01/RW.06, Sindangsari, Kec. Bogor Tim., Kota Bogor, Jawa Barat 16146</p>
			<hr>
			<br>
		<h5>Laporan Sakit Bulan</h5>

		<table class="table table-bordered table-md">
			<thead>
				<tr>
					<th>NIS</th>
					<th>Nama</th>
					<th>Rombel</th>
					<th>Rayon</th>
					<th>Tanggal</th>
					<th>Pukul</th>
					<th>Diagnosa</th>
					<th>Keterangan</th>
				</tr>
			</thead>
			<tbody>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
				
				
			</tbody>
		</table>

		<div class="text-right">
			<button class="print btn btn-primary" onclick="window.print()">CETAK</button>
			<a href="/input_sakit" class="print btn btn-danger">KEMBALI</a>
		</div>
	</div>
</div>