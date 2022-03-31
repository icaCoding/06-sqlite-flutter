<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Barang;
use App\Models\Customer;
use App\Models\Transaksi;
use PDF;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('transaksi.index', [
            'transaksi' => Transaksi::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('transaksi.create',[
            'barang'=> Barang::all(),
            'customer'=> Customer::all()
        ]);
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
            'kode_sewa' => 'required',
            'nama_customer' => 'required',
            'nama_barang' => 'required',
            'tgl_pinjam' => 'required',
            'status' => 'required'
        ]);
        Transaksi::create([
            'kode_sewa' => $request->kode_sewa,
    		'nama_customer' => $request->nama_customer,
    		'nama_barang' => $request->nama_barang,
            'tgl_pinjam' => $request->tgl_pinjam,
            'status' => $request->status
    	]);
        return redirect('/transaksi')->with('success', 'Data Sewa Barang berhasil ditambahkan');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $transaksi = Transaksi::where('id', $id)->findOrFail($id);
        $transaksi->delete();
        return view('transaksi.edit', [
            'transaksi' =>$transaksi,
            'barang' => Barang::all(),
            'customer' => Customer::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this->validate($request, [
            'kode_sewa' => 'required',
            'nama_customer' => 'required',
            'nama_barang' => 'required',
            'tgl_pinjam' => 'required',
            'status' => 'required'
        ]);
        Transaksi::create([
            'kode_sewa' => $request->kode_sewa,
    		'nama_customer' => $request->nama_customer,
    		'nama_barang' => $request->nama_barang,
            'tgl_pinjam' => $request->tgl_pinjam,
            'status' => $request->status
    	]);
        return redirect('/transaksi')->with('success', 'Data Sewa berhasil diupdate');

    }

    public function print()
    {
        $transaksi = Transaksi::all();
    
        $pdf = PDF::loadview('print',['transaksi'=>$transaksi]);
        return $pdf->stream();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $transaksi = Transaksi::where('id', $id)->findOrFail($id);
        $transaksi->delete();
        return redirect('/transaksi')->with('success-message', 'Data telah dihapus');
    }
}
