@extends('templates/admin_temp')

@section('container')

<div class="container-fluid">
<div class="main-content">
	<div class="section">
		<div class="section-header">
<body>
	
	<h1>Data Siswa Kelas XI</h1>
                   
                        <div class="container justify-content-center ">
                        <div class="btn-group" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-secondary" ><a href="/siswaX" style="color:white;">X</a></button>
                        <button type="button" class="btn btn-secondary"><a href="/siswaXI" style="color:white;">XI</a></button>
                        <button type="button" class="btn btn-secondary"><a href="/siswaXII" style="color:white;">XII</a></button>
                        </div>
                        </div>
                    
                
    
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
                <th>JK</th>
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
        <td></td>
		<td><a href="#" class="btn btn-danger">Hapus</a> 
			<a href="/edit_siswa" class="btn btn-info">Edit</a>
		</td>

	</tbody>
	</table>

    </div>
    
		
        
	</div>
</div>

</body>


@endsection
