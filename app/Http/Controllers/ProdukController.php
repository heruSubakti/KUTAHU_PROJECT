<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use Spatie\FlareClient\View;

class ProdukController extends Controller
{
    public function landing()
    {
        return view('landingpage.lp');
    }


    public function Dashboard1()
    {
        return view('dashboard.dashboard');
    }

    public function video()
    {
        return view('dashboard.video.kumpulan');
    }

    public function cerita()
    {
        return view('dashboard.cerita.jaka');
    }

    public function cerita1()
    {
        return view('dashboard.cerita.sangku');
    }

    public function cerita2()
    {
        return view('dashboard.cerita.cerita');
    }

     public function joko_kendil(){
        return view('dashboard.cerita.joko_kendil');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [];
        if(request('id')){
            $data = Produk::where('id', request('id'))->first();
        }
        return view('tambah_data' ,compact('data'));
    }
    
    public function dashboard()
    {
        $data = Produk::get();
        // return $data;
        return view('dashboard', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'berat' => 'required',
            'size' => 'required',
            'harga' => 'required'
        ]);
        //  return $request;
        Produk::create([
            'nama_produk' => $request->nama ,
            'berat_barang' => $request->berat ,
            'size' => $request->size ,
            'harga' => $request->harga
        ]);

        return redirect('/dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'berat' => 'required',
            'size' => 'required',
            'harga' => 'required'
        ]);

        Produk::where('id',$request->id)->update([
            'nama_produk' => $request->nama ,
            'berat_barang' => $request->berat ,
            'size' => $request->size ,
            'harga' => $request->harga
        ]);

        return redirect('/dashboard');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Produk::where('id', $id)->delete();
        return back();
    }
}
