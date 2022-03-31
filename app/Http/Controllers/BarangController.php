<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Barang;
 
class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('barang.index', [
            'barang' => Barang::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('barang.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_barang' => 'required',
            'deskripsi'  => 'required',
            ]);
            $file = $request->file('gambar');
            $barang = new Barang;
            $barang->nama_barang = $request->nama_barang;
            $barang->deskripsi  = $request->deskripsi;
            $barang->harga   = $request->harga;
            $barang->stok   = $request->stok;
            $barang->gambar  = $file->getClientOriginalName();
            $tujuan_upload = 'public/img';
            $file->move($tujuan_upload,$file->getClientOriginalName());
            $barang->save();
            
            return redirect('barang')->with('msg','Data Berhasil di Simpan');     
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $barang = Barang::where('id_barang', $id)->findOrFail($id);
        return view('barang.show',[
            'barang'=>$barang
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $barang = Barang::where('id_barang', $id)->findOrFail($id);
        $barang->delete();
        return view('barang.edit', [
            'barang' => $barang
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $this->validate($request, [
            'nama_barang' => 'required',
            'deskripsi'  => 'required',
            ]);
            $file = $request->file('gambar');
            $barang = new Barang;
            $barang->nama_barang = $request->nama_barang;
            $barang->deskripsi  = $request->deskripsi;
            $barang->harga   = $request->harga;
            $barang->stok   = $request->stok;
            $barang->gambar  = $file->getClientOriginalName();
            $tujuan_upload = 'public/img';
            $file->move($tujuan_upload,$file->getClientOriginalName());
            $barang->save();
            
            return redirect('barang')->with('msg','Data Berhasil di Edit');   
          
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $barang = Barang::where('id_barang', $id)->findOrFail($id);
        $barang->delete();
        return redirect('/barang')->with('success-message','Data telah dihapus');
    }
}
