@extends('layouts.app')
@section('title','Home')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 align-items-center px-4 py-5" style="text-align: center">
            <h2>Tambahkan Tempat</h2>
        </div>
        <div class="col-md-12" style="margin-bottom: 10px;">
            <input id="nama" type="text" class="form-control" name="nama" value="" placeholder="Nama Tempat" required autocomplete="off" autofocus>
        </div>
        <div class="col-md-12" style="margin-bottom: 10px;">
            <input id="kategori" type="text" class="form-control" name="kategori" value="" required autocomplete="off">
        </div>
        <div class="col-md-12" style="margin-bottom: 10px;">
            <input id="alamat" type="text" class="form-control" name="alamat" value="" placeholder="Alamat" required autocomplete="off">
        </div>
        <hr>
        <div class="col-md-12" style="margin-bottom: 10px;">
            <input id="jambuka" type="text" class="form-control" name="jambuka" value="" placeholder="Jam Buka" required autocomplete="off">
        </div>
        <div class="col-md-12" style="margin-bottom: 10px;">
            <input id="notelepon" type="text" class="form-control" name="notelepon" value="" placeholder="No. Telepon" required autocomplete="off">
        </div>
        <div class="col-md-12">
            Tambahkan foto yang berguna sebagai penanda atau pemberitahuan
        </div>
        <div class="col-md-12" style="margin-bottom: 10px;">
            <input id="foto" type="file" class="form-control" name="foto" value="" placeholder="Tambahkan Foto" required autocomplete="off">
        </div>
        <div class="col-md-6">
            <input id="batal" type="button" class="form-control" name="batal" value="Batal">
        </div>
        <div class="col-md-6">
            <input id="posting" type="button" class="form-control btn btn-primary" name="posting" value="Posting">
        </div>
    </div>
</div>
@endsection
