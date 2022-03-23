@extends('templates/admin_temp')

@section('container')

<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h4>Form Hitung IMT</h4>
		</div>
		<div class="section-body">
			<div class="row">	
				<div class="col-6">
						<div class="card-deck">
						<div class="card">
                        <div class="card-body">
							<form action="" method="post">
                                     <div class="form-group">
                                        <label>Jenis Kelamin</label>
                                        <input type="text" name="jk"  class="form-control text-dark" value="">
                                    </div>
                                    <div class="form-group">
                                        <label>Usia (tahun)</label>
                                        <input type="text" name="usia"  class="form-control text-dark" value="">
                                    </div>
                                    <div class="form-group">
                                        <label>Tinggi Badang (cm)</label>
                                        <input type="text" name="tb"   class="form-control text-dark" value="">
                                    </div>
                                    <div class="form-group">
                                        <label>Berat Badan (kg)</label>
                                        <input type="text" name="rayon"   class="form-control text-dark" value="">
                                    </div>
                                    <div class="form-group">
                                        <label>Semester</label>
                                        <input type="date" name="tanggal"   class="form-control text-dark" value="">
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
		</div>
	</section>
</div>

@endsection