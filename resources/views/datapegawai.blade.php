@extends('layouts.admin')

@section('content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Data Pegawai</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Data Pegawai</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>

  <div class="container">
    <a href="/tambahdata" class="btn btn-success">Tambah +</a>
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
            <th scope="col">Name</th>
            <th scope="col">Gender</th>
            <th scope="col">No telp</th>
            <th scope="col">Dibuat</th>
            <th scope="col" style="display:flex; justify-content: center;">Aksi</th>
          </tr>
        </thead>
        <tbody>
  
        @php
          $no = 1;
        @endphp
  
        @foreach ($data as $data)
        <tr>
          <th scope="data">{{ $no++ }}</th>
          <td>{{ $data->name }}</td>
          <td>{{ $data->gender }}</td>
          <td>0{{ $data->notelp }}</td>
          <td>{{ $data->created_at->format('D M Y') }}</td>
          <td style="display: flex; justify-content: center;">
            
            <a href="/tampilkandata/{{ $data->id }}" class="nav-link">
              <i class="fas fa-edit"></i>
            </a>

            <a href="/delete/{{ $data->id }}" class="nav-link">
              <i class="fas fa-trash-alt"></i>
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