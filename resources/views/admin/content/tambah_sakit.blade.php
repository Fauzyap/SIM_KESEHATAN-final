@extends('templates/admin_temp')

@section('container')

<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h4>Data Siswa</h4>
		</div>
		<div class="section-body">
			<div class="row">	
				<div class="col-6">
						<div class="card">
						<div class="card-body">	
							<form action="" method="post">
								<div class="form-group">
									<label>NIS</label>
									<input type="text" name="nama"  class="form-control text-dark" value="">
								</div>
								<div class="form-group">
									<label>Nama</label>
									<input type="text" name="nama"  class="form-control text-dark" value="">
								</div>
								<div class="form-group">
									<label>Rombel</label>
									<input type="text" name="rombel"   class="form-control text-dark" value="">
								</div>
								<div class="form-group">
									<label>Rayon</label>
									<input type="text" name="rayon"   class="form-control text-dark" value="">
								</div>
                                <div class="form-group">
									<label>Tanggal</label>
									<input type="date" name="tanggal"   class="form-control text-dark" value="">
								</div>
                                <div class="form-group">
									<label>Pukul</label>
									<input type="time" name="pukul"   class="form-control text-dark" value="">
								</div>
                                <div class="form-group">
									<label>Diagnosa</label>
									<input type="text" name="diagnosa"   class="form-control text-dark" value="">
								</div>
                                <div class="form-group">
									<label>Keterangan</label>
									<input type="text" name="keterangan"   class="form-control text-dark" value="">
								</div>
								<div class="row">
									<div class="col-6">	
										<button class="btn btn-info form-control">SIMPAN</button>
									</div>

								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>

@endsection