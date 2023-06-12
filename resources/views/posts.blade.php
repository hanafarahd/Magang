@extends('layouts.admin')

@section('content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Post Artikel</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Post Artikel</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>

  <div class="container">
    <a href="/tambahpost" class="nav-link">
      <i class="fas fa-folder-plus" style="font-size:30px;color:rgb(87, 151, 248)"></i>
    </a>
    <div class="row">
        
            @if ($message = Session::get('success'))
            <div class="alert alert-success" role="alert">
              {{ $message }}
            </div>
            @endif
        
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Title</th>
                  <th scope="col">Image</th>
                  <th scope="col">Category</th>
                  <th scope="col">Tayang</th>
                  <th scope="col">Dibuat</th>
                  <th scope="col" style="display:flex; justify-content: center;">Aksi</th>
                </tr>
              </thead>
              <tbody>
        
              @php
                $no = 1;
              @endphp
        
              @foreach ($post as $post)
              <tr>
                <th scope="post">{{ $no++ }}</th>
                <td>{{ $post->title }}</td>
                <td>{{ $post->image }}
                  <img src="{{ asset('imagepost/'.$post->image) }}" alt="" style="width: 100px;">
                </td>
                <td>{{ $post->category }}</td>
                <td>{{ $post->tayang }}</td>
                <td>{{ $post->created_at->format('D M Y') }}</td>
                <td style="display: flex; justify-content: center;">
                  
                  <a href="/tampilkanpost/{{ $post->id }}" class="nav-link">
                    <i class="fas fa-edit"></i>
                  </a>

                  <a href="/deletepost/{{ $post->id }}" class="nav-link">
                    <i class="fas fa-trash-alt"></i>
                  </a>
                  
                  <a href="/blog_details/{{ $post->slug }}" class="nav-link">
                    <i class="fas fa-eye"></i>
                  </a>
        
                </td>
              </tr>
              @endforeach
        
        
              </tbody>
            </table>
          </div>
        </div>
      </div>
    
@endsection


