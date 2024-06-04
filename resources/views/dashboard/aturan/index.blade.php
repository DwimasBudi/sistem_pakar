@extends('dashboard.layouts.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-5 mt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"><i class="uil uil-syringe"></i> Basis Aturan</h1>
    </div>

@if (session()->has('success'))
<div class="alert alert-success col-lg-10" role="alert">
  {{ session('success') }}
</div>
@endif
<div class="table-responsive col-lg-8">
        <table class="diagnosa">
        {{-- <tr>
            <th>No</th>
            <th>Gejala</th>
            <th>Keyakinan</th>
        </tr> --}}
        @foreach ($kecanduan as $item)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->nama_kecanduan }}</td>
            <td>
                {{-- <button>Basis Aturan</button> --}}
                <a href="/dashboard/basis-aturan/data/{{ $item->id }}" type="button" class="btn btn-primary"><i class="uil uil-syringe"></i> Ubah Rule</a>

                {{-- <input type="submit" value="Diagnosa Sekarang"> --}}
            </td>
        </tr>
        @endforeach
        </table>
</div>
@endsection