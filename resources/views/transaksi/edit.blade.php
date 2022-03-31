@extends('layouts.app')
@section('title','Transaksi')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <br><br>
            <h1 class="display-5 fw-bold lh-1 mb-3">Edit Transaksi</h1>
            <hr class="my-4">     
            <form action="/transaksi/update/{{ $transaksi->id }}" method="POST">
                    <!-- @method('put') -->
                    @csrf
                    <div class="form-group row mt-3">
                        <p class="col-sm-12 col-md-2 col-form-label h6">Kode Sewa</p>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control" name="kode_sewa" type="text" value="{{ $transaksi->kode_sewa}}">
                        </div>
                    </div>
                    <div class="form-group row mt-3">
                        <p class="col-sm-12 col-md-2 col-form-label h6">Nama Customer</p>
                        <div class="col-sm-12 col-md-10">
                            <select class="form-control" name="nama_customer" value="{{ $transaksi->nama_customer }}">
                                @foreach ($customer as $cus)
                                    @if (old('nama_customer', $transaksi->nama_customer) == $cus->nama_customer)
                                        <option value="{{ $cus->nama_customer }}" selected>{{ $cus->nama_customer }}</option>
                                    @else
                                        <option value="{{ $cus->nama_customer }}">{{ $cus->nama_customer }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row mt-3">
                        <p class="col-sm-12 col-md-2 col-form-label h6">Nama Barang</p>
                        <div class="col-sm-12 col-md-10">
                            <select class="form-control" name="nama_barang" value="{{ $transaksi->nama_barang }}" >
                                @foreach ($barang as $bar)
                                    @if (old('id_barang', $transaksi->nama_barang) == $bar->nama_barang)
                                        <option value="{{ $bar->nama_barang }}" selected>{{ $bar->nama_barang }}</option>
                                    @else
                                        <option value="{{ $bar->nama_barang}}">{{ $bar->nama_barang }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row mt-3">
                        <p class="col-sm-12 col-md-2 col-form-label h6">Tanggal Sewa</p>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control" name="tgl_pinjam" type="date" value="{{ $transaksi->tgl_pinjam }}">
                        </div>
                    </div>
                    <div class="form-group row mt-3">
                        <p class="col-sm-12 col-md-2 col-form-label h6">Status</p>
                        <div class="col-sm-12 col-md-10">
                            <select class="form-control" name="status" value="{{ $transaksi->status }}">
                                <option selected>--Pilih--</option>

                                @if (old('status', $transaksi->status)== "Pengembalian")
                                    <option value="Pengembalian" selected>Pengembalian</option>
                                    <option value="Dikembalikan" >Dikembalikan</option>
                                @else
                                    <option value="Pengembalian" >Pengembalian</option>
                                    <option value="Dikembalikan" selected>Dikembalikan</option>
                                @endif
                            </select>
                        </div>
                    </div>
                    <div class="text-center">
                        <a href="/transaksi" class="btn btn-outline-dark">Batal</a>
                        <button type="submit" class="btn btn-dark">Simpan</button>
                    </div>
            </form>
        </div>
    </div>
</div>
@endsection