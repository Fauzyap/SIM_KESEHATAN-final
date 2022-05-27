@extends('templates/siswa_temp')

@section('container')
 
 <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Tips dan Trik Kesehatan</h1>
            
          </div>

          <div class="section-body">
            <div class="card">
              <div class="col-12">
                  <div class="card-header">
                  @foreach ($siswa as $siswa)
                    <div class="col-md-4 col-sm-12 mt-4">
                        <div class="card">
                        @csrf
                            <img src="/post-images/{{$siswa->gambar}}" class="card-img-top" alt="gambar" >
                            <div class="card-body">
                                <h5 class="card-title">{{ $siswa->judul }}</h5>
                                <a href="{{ route('siswa.show',$siswa->id) }}" class="btn btn-primary">Baca Artikel</a>
                            </div>
                        </div>
                    </div>
           @endforeach
                    {{-- CONTENT TIPS AND TRIKS --}}


                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    @endsection