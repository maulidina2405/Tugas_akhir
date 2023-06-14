@extends('layouts.master')

@section('content')
    <div class="container">
        <h1>Create Penjualan</h1>
        <form action="/penjualan/store" method="POST">
@csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">KODE BARANG</label>
                <input type="text" name="kode_barang" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">NAMA BARANG</label>
                <input type="text" name="nama_barang" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">KATEGORI</label>
                <input type="text" name="kategori" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">HARGA</label>
                <input type="text" name="harga" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">JUMLAH</label>
                <input type="text" name="jumlah" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
                <input type="submit" name="submit"  class="btn btn-info" value="Save">
            </form>
        </div>
   
@endsection