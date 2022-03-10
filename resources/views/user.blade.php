@extends('templates.index')

@section('content')
    <h1 class="mb-5">Form Penjualan</h1>
    <div class="m-2">
        <h2>Stock yang dipakai</h2>
        @include('partials.stock')
    </div>
    <div class="m-2">
        <h2>Belanjaan</h2>
        @include('partials.belanja')
    </div>

    <button type="submit" class="btn btn-primary" style="width: 142px">Kirim</button>
@endsection
