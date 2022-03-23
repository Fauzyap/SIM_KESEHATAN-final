@extends('templates/admin_temp')

@section('container')

<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h4>Data Hitung IMT</h4>
		</div>

        <div class="section-body">
            <a href="/tambah_imt" class="btn btn-info ml-2">Tambah Data</a>
            <br>	
            <br>
    
        <table id="table-1" class="table table-striped table-hovered table-bordered">
        <thead>	
                <tr>
                    <th>NIS</th>
                    <th>Nama</th>
                    <th>Rombel</th>
                    <th>Rayon</th>
                    <th>Hasil IMT</th>
                    <th>Aksi</th>
                </tr>
        </thead>
        <tbody>	
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><a href="#" class="btn btn-warning">Ubahs</a> 
                <a href="/edit_siswa" class="btn btn-danger">Hapus</a>
            </td>
    
        </tbody>
        </table>
            </div>
        </div>
    </div>
    </div>
    







@endsection