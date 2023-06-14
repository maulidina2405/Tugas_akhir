@extends('layouts.master')

@section('content')
    <div class="container">
        <a class="btn btn-primary" href="/penjualan/create">Add Penjualan</a>
        <table class="table table-hover">
            <tr>
                <th>NO</th>
                <th>KODE BARANG</th>
                <th>NAMA BARANG</th>
                <th>KATEGORI</th>
                <th>HARGA</th>
                <th>JUMLAH</th>
                <th>AKSI</th>
            </tr>
            @foreach ($penjualan as $p)
                <tr>
                    <td>{{$p->id}}</td>
                    <td>{{$p->kode_barang}}</td>
                    <td>{{$p->nama_barang}}</td>
                    <td>{{$p->kategori}}</td>
                    <td>{{$p->harga}}</td>
                    <td>{{$p->jumlah}}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a class="btn btn-warning" href="/penjualan/{{$p->id}}/edit">Edit</a>
                            <form action="/penjualan/{{$p->id}}" method="POST">
                                @csrf
                                @method('delete')
                                <input class="btn btn-danger" type="submit" value="Delete">
                            </form>
                        </div>
                    </td>
                    
                </tr>
            @endforeach
        </table>
    </div>
@endsection
    