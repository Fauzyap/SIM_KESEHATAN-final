@extends('templates/admin_temp')

@section('container')

<div class="container-fluid">
<div class="main-content">
	<div class="section">
		<div class="section-header">
<body>
	
	<h1>Data Siswa</h1>

		</div>
	<div class="section-body">
		<a href="/form" class="btn btn-info ml-2">Import Data</a>
		<br>	
		<br>

	<table id="table-1" class="table table-striped table-hovered table-bordered">
	<thead>	
			<tr>
				<th>NIS</th>
				<th>Nama</th>
				<th>Rombel</th>
				<th>Rayon</th>
				<th>Aksi</th>
			</tr>
	</thead>
	<tbody>	
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td><a href="#" class="btn btn-danger">Hapus</a> 
			<a href="/edit_siswa" class="btn btn-info">Edit</a>
		</td>

	</tbody>
	</table>
</body>
		</div>
	</div>
</div>
</div>

@endsection