@extends('layouts.master')

@section('content')
<div class="container">
    <h1>Edit Penjualan</h1>

    <form action="/penjualan/{{$penjualan->id}}" method="POST">
        @method('put')
        @csrf
        <div class="mb-3">
            <label for="kode_barang" class="form-label">KODE BARANG</label>
            <input type="text" name="kode_barang" class="form-control" id="kode_barang" aria-describedby="emailHelp" value="{{$penjualan->kode_barang}}">
        </div>

        <div class="mb-3">
            <label for="nama_barang" class="form-label">NAMA BARANG</label>
            <input type="text" name="nama_barang" class="form-control" id="nama_barang" aria-describedby="emailHelp" value="{{$penjualan->nama_barang}}">
        </div>

        <div class="mb-3">
            <label for="kategori" class="form-label">KATEGORI</label>
            <input type="text" name="kategori" class="form-control" id="kategori" aria-describedby="emailHelp" value="{{$penjualan->kategori}}">
        </div>

        <div class="mb-3">
            <label for="harga" class="form-label">HARGA</label>
            <input type="text" name="harga" class="form-control" id="harga" aria-describedby="emailHelp" value="{{$penjualan->harga}}">
        </div>

        <div class="mb-3">
            <label for="jumlah" class="form-label">JUMLAH</label>
            <input type="text" name="jumlah" class="form-control" id="jumlah" aria-describedby="emailHelp" value="{{$penjualan->jumlah}}">
        </div>
        
        <input type="submit" name="submit" class="btn btn-info" value="Update">
    </form>
</div>
@endsection