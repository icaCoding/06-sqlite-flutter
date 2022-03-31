@extends('layouts.app')
@section('title','Transaksi')
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <br><br>
      @if(session('msg'))
      <div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
        {{session('msg')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      @endif
      <h1 class="display-5 fw-bold lh-1 mb-3">Data Sewa Barang</h1>
      <hr class="my-4">
      <a href="transaksi/create " class="btn btn-dark mb-1">Sewa Barang</a>
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Kode Sewa</th>
            <th scope="col">Nama Customer</th>
            <th scope="col">Nama Barang</th>
            <th scope="col">Tanggal Sewa</th>
            <th scope="col">Tanggal Kembali</th>
            <th scope="col">Status</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          @foreach ($transaksi as $trans)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $trans->kode_sewa }}</td>
            <td>{{ $trans->nama_customer }}</td>
            <td>{{ $trans->nama_barang }}</td>
            <td>{{ $trans->tgl_pinjam }}</td>
            <td>
              @if ($trans->status == "Pengembalian")
                <span>-</span>
              @else
                <span">{{ $trans->created_at }}</span>
              @endif
            </td>
            <td>
              @if ($trans->status == "Pengembalian")
                <span class="badge bg-info text-dark"></i>Belum Kembali</span>
              @else
                <span class="badge bg-secondary"></i>Dikembalikan</span>
              @endif
            </td>
            <td>
              <a href="transaksi/edit/{{ $trans->id }}" class="badge bg-warning"><i class='bx bxs-pencil bx-sm'></i></a>
              <a href="transaksi/destroy/{{ $trans->id }}" class="badge bg-danger"><i class='bx bxs-trash bx-sm'></i></a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection