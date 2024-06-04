@extends('dashboard.layouts.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-5 mt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"><i class="uil uil-heartbeat"></i> Daftar Gejala</h1>
    </div>

@if (session()->has('success'))
<div class="alert alert-success col-lg-10" role="alert">
  {{ session('success') }}
</div>
@endif
    <div class="table-responsive col-lg-12">
        <a href="/dashboard/gejala/create" class="btn btn-primary mb-3">Tambah gejala</a>
        <table id="tabel-data" class="table table-striped table-bordered" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th scope="col">Kode</th>
              <th scope="col">Nama</th>
              <th scope="col">
                Action
              </th>
            </tr>
          </thead>
          <tbody>
            @foreach ($gejalas as $gejala)
            <tr>
              <td>{{ $gejala->kode_gejala  }}</td>
              <td>{{ $gejala->nama_gejala}}</td>
              <td style="width: 100px; ">
                <a href="/dashboard/gejala/{{ $gejala->id }}/edit" class="badge text-bg-warning"><i class="uil uil-edit"></i></a>
                <form action="/dashboard/gejala/{{ $gejala->id }}" method="post" class="d-inline">
                  @method('delete')
                  @csrf
                  <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><i class="uil uil-times-circle"></i></button>
                   {{-- <a href="" class="badge text-bg-danger"></a> --}}
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
    </div>
@endsection