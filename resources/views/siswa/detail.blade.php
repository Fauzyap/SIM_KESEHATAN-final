<!DOCTYPE html> 
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>SIM KESEHATAN</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<div class="card">
  <div class="card-header">
    <h5 class="card-title">Informasi Ku</h5>
  </div>
  <div class="card-body">
    <div class="row">
    @if($siswa->gambar)
                                      <img src="/post-images/{{$siswa->gambar}}" width="200px" height="200">
                                    @else
                                      <p>Tidak Ada Photo</p>
                                    @endif
    </div>
    <div class="row">
       <h1  name="judul" >{{$siswa->judul}}</h1>
    </div>
    <div class="row">
       <p  name="desk" >{{$siswa->desk}}</p>
    </div>
    <a href="/siswa" class="btn btn-danger">Kembali</a>
  </div>
 
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
     