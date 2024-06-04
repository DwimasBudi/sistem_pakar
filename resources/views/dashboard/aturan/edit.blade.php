@extends('dashboard.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-5 mt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2"><i class="uil uil-syringe"></i> Basis Aturan </h1>
</div>
<div class="table-responsive col-lg-12">
    <form id="form" action="/dashboard/basis-aturan" method="POST">
    @csrf
        <table class="diagnosa">
            <tr>
            <th>No</th>
            <th>Gejala</th>
            <th>Nilai CF</th>
        </tr>
@foreach ($rules as $item)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $item->gejala->nama_gejala }} : </td>
        <td>
            <input name="{{ $item->gejala_id }}" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" style="width: 50%" value="{{ $item->value_cf }}">
        </td>
    </tr>
    @if ($loop->last && !$gejalas->isEmpty())
        @php $additional_index = $loop->count; @endphp
        @foreach ($gejalas as $gejala)
            <tr>
                <td>{{ $loop->iteration + $additional_index }}</td>
                <td>{{ $gejala->nama_gejala }} : </td>
                <td>
                    <input name="{{ $gejala->id }}" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" style="width: 50%">
                </td>
            </tr>
        @endforeach
    @endif
@endforeach
        </table>
        <input type="submit" value="Simpan Rule">
        </form>
</div>
@endsection