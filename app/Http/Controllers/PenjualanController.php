<?php

namespace App\Http\Controllers;

use App\Models\Penjualan;
use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    public function index() {
        $penjualan = Penjualan::all();
        return view('penjualan.index',compact(['penjualan']));
    }

    public function create()
    {
        return view('penjualan.create');
    }

    public function store(Request $request)
    {
        //dd($request->except(['_token','submit']));
        Penjualan::create($request->except(['_token','submit']));
        return redirect('/penjualan');
    }

    public function edit($id)
    {
        $penjualan = Penjualan::find($id);
        return view('penjualan.edit',compact(['penjualan']));
    }

    public function update($id, Request $request)
    {
        $penjualan = Penjualan::find($id);
        $penjualan->update($request->except(['_token','submit']));
        return redirect('/penjualan');
    }

    public function destroy($id)
    {
        $penjualan = Penjualan::find($id);
        $penjualan->delete();
        return redirect('/penjualan');
    }

}
