@extends('layouts.app')
@section('title','Transaksi')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <br><br>
            <h1 class="display-5 fw-bold lh-1 mb-3">Sewa Barang</h1>
            <hr class="my-4">
            <form action="/transaksi" method="POST">
                @csrf
                <div class="form-group row mt-3">
                    <p class="col-sm-12 col-md-2 col-form-label h6">Kode Sewa</p>
                    <div class="col-sm-12 col-md-10">
                        <input class="form-control" name="kode_sewa" type="text" placeholder="Masukkan kode sewa">
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <p class="col-sm-12 col-md-2 col-form-label h6">Nama Customer</p>
                    <div class="col-sm-12 col-md-10">
                        <select class="form-control" name="nama_customer" >
                            <option selected>Pilih Customer</option>
                            @foreach ($customer as $cus)
                                <option value="{{ $cus->nama_customer }}">{{ $cus->nama_customer }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <p class="col-sm-12 col-md-2 col-form-label h6">Nama Barang</p>
                    <div class="col-sm-12 col-md-10">
                        <select class="form-control" name="nama_barang" >
                            <option selected>Pilih Barang</option>
                            @foreach ($barang as $bar)
                                <option value="{{ $bar->nama_barang }}">{{ $bar->nama_barang }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <p class="col-sm-12 col-md-2 col-form-label h6">Tanggal Sewa</p>
                    <div class="col-sm-12 col-md-10">
                        <input class="form-control" name="tgl_pinjam" type="date" placeholder="Masukkan tanggal sewa">
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <p class="col-sm-12 col-md-2 col-form-label h6">Status</p>
                    <div class="col-sm-12 col-md-10">
                        <select class="form-control" name="status" >
                            <option selected>Pilih Status</option>
                            <option value="Dikembalikan">Dikembalikan</option>
                            <option value="Pengembalian">Pengembalian</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <p class="col-sm-12 col-md-2 col-form-label h6"></p>
                    <div class="col-sm-12 col-md-10">
                        <a href="/transaksi" class="btn btn-outline-dark">Batal</a>
                        <button type="submit" class="btn btn-dark">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection