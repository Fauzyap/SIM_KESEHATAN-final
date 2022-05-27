<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <form  method="post" action="{{route('admin.store')}}" enctype="multipart/form-data">
      @csrf
 <div class="card-header"><strong>Tambah</strong><small> Data</small></div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Judul</label>
    <input type="text" name="judul" value="{{old('judul')}}" class="form-control @error('judul') is-invalid @enderror" class="form-control" id="exampleFormControlInput1" placeholder="Isi dengan judul">
    @error('judul')
        <div class="invalid-feedback{{$message}}"></div>
    @enderror
  </div>
  <div class="form-group">
    <label for="exampleFormControlFile1">Input Gambar</label>
    <input type="file" name="gambar" value="{{old('gambar')}}" class="form-control @error('gambar') is-invalid @enderror"  class="form-control-file" id="exampleFormControlFile1">
    @error('gambar')
        <div class="invalid-feedback{{$message}}"></div>
    @enderror
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Deskripsi</label>
    <textarea name="desk" value="{{old('desk')}}" class="form-control @error('desk') is-invalid @enderror" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    @error('desk')
         <div class="invalid-feedback{{$message}}"></div>
    @enderror
  </div>
  <button type="submit" class="btn btn-primary">Tambah Topic</button>
                        <a href="/admin" class="btn btn-danger">Kembali</a>
</form>
    </div>
  </div>
</div>