<!DOCTYPE html> 
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>SIM KESEHATAN</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<div class="content-wrapper" style="margin-left: 18rem;">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">Edit Topic</h1>
                        </div>
                       
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card">
                                            
                    <form action="{{ route('admin.update',$admin->id) }}" method="POST" enctype="multipart/form-data"> 
                        @csrf

                        @method('PUT')
                        
                        <div class="card-header"><strong>Edit</strong><small> Data</small></div>
                                <div class="card-body card-block">  
                                <div class="mb-3">
                                      <label class="form-label">Judul</label>
                                      <input type="text" name="judul" value="{{$admin->judul}}" class="form-control @error('judul') is-invalid @enderror" placeholder="Masukan Nama">
                                      @error('judul')
                                          <div class="invalid-feedback{{$message}}"></div>
                                      @enderror
                                    
                                    </div>
                                    @if($admin->gambar)
                                      <img src="/post-images/{{$admin->gambar}}" width="75px" height="75px">
                                    @else
                                      <p>Tidak Ada Photo</p>
                                    @endif
                                    <div class="mb-3">
                                      <label class="form-label">Gambar</label>
                                      <input type="file" name="gambar" value="{{$admin->gambar}}" class="form-control @error('gambar') is-invalid @enderror" placeholder="Masukan gambar">
                                      @error('gambar')
                                        <div class="invalid-feedback{{$message}}"></div>
                                      @enderror
                                    
                                  </div>
                                  <div class="mb-3">
                                        <label class="form-label">Deskripsi</label>
                                        <input type="text" name="desk" value="{{$admin->desk}}" class="form-control  @error('desk') is-invalid @enderror" placeholder="Masukan ket">
                                        @error('desk')
                                          <div class="invalid-feedback{{$message}}"></div>
                                        @enderror
                                      
                                    </div>          
                                    <button type="submit" class="btn btn-primary">Update Data</button>
                                    <a href="/admin" class="btn btn-danger">Kembali</a>
                                </form>
                            </div>
                            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
     