@extends('templates/admin_temp')

@section('container')

<div class="main-content">
	<div class="section">
		<div class="section-header">
			<h4>Form Import</h4>
<html>
<head>
	
	<!-- Load File jquery.min.js yang ada difolder js -->
	<script src=""></script>
	
	<script>
	$(document).ready(function(){
		// Sembunyikan alert validasi kosong
		$("#kosong").hide();
	});
	</script>
</head>
<body>
		</div>
		<div class="section-body">
	
	<!-- Buat sebuah tag form dan arahkan action nya ke controller ini lagi -->
	<form method="post" action="{{ route('importdatasiswa') }}" enctype="multipart/form-data">

		<!-- 
		-- Buat sebuah input type file
		-- class pull-left berfungsi agar file input berada di sebelah kiri
		-->
		{{ crsf_field() }}
		<input type="file" name="file" class="form-control ">
		
		<!--
		-- BUat sebuah tombol submit untuk melakukan preview terlebih dahulu data yang akan di import
		-->
		<br>	

		<button type="submit" name="preview" value="Preview" class="btn btn-info">
		<br>	
		<br>	
		
	</form>
	

			<script>
			$(document).ready(function(){
				// Ubah isi dari tag span dengan id jumlah_kosong dengan isi dari variabel kosong
				$("#jumlah_kosong").html('');
				
				$("#kosong").show(); // Munculkan alert validasi kosong
			});
			</script>

	<br>	
	<br>	
</body>
</html>
		</div>
	</div>
</div>

@endsection
