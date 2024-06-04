@extends('dashboard.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-5 mt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create Category</h1>
</div>
<div class="col-lg-12">
    {{-- /dashboard/posts + method POST otomais ke method store --}}
<form action="/dashboard/kecanduan/{{ $kecanduan->id }}" method="post" class="mb-5">
    @method("put")
    @csrf
  <div class="mb-3">
    <label for="kode_kecanduan" class="form-label">Kode Kecanduan :</label>
    <input type="text" name="kode_kecanduan" class="form-control @error('kode_kecanduan') is-invalid @enderror" id="kode_kecanduan" placeholder="Kode Kecanduan" autofocus value="{{ old('title',$kecanduan->kode_kecanduan) }}">
    @error('kode_kecanduan')
        <div class="invalid-feedback">
            {{$message}}
        </div> 
    @enderror
  </div>
  <div class="mb-3">
    <label for="nama_kecanduan" class="form-label">Nama Kecanduan :</label>
    <input type="text" name="nama_kecanduan" class="form-control @error('nama_kecanduan') is-invalid @enderror" id="nama_kecanduan" placeholder="Nama Kecanduan" value="{{ old('nama_kecanduan',$kecanduan->nama_kecanduan) }}">
    @error('nama_kecanduan')
        <div class="invalid-feedback">
            {{$message}}
        </div> 
    @enderror
  </div>

  <button type="submit" class="btn btn-primary mt-3">Update Category</button>
</form>
</div>
@endsection