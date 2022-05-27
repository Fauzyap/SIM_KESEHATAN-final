@extends('templates/admin_temp')

@section('container')
 
 <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Tips dan Trik Kesehatan</h1>
            
          </div>

          <div class="section-body">
            <button type="button" class="btn btn-info" data-toggle="modal" data-target=".bd-example-modal-lg">Tambah Tips</button>
            <div class="card">
              <div class="col-12">
                  <div class="card-group">
                  @foreach ($admin as $admin)
                    <div class="col-md-4 col-sm-12 mt-4">
                        <div class="card">
                            <img src="/post-images/{{$admin->gambar}}" class="card-img-top" alt="gambar" >
                            <div class="card-body">
                                <h5 class="card-title">{{ $admin->judul }}</h5>
                                <form action="{{ route('admin.destroy',$admin->id) }}" method="POST">
           
                                  <a class="btn btn-primary" href="{{ route('admin.edit',$admin->id) }}">Edit</a>
                  
                                  @csrf
                                  @method('DELETE')
                      
                                  <button type="submit" class="btn btn-danger">Delete</button>
                              </form>
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
    @include('admin.create')