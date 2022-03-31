@extends('layouts.app')
@section('title','Customer')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <br><br>
            @if(session('msg'))
                <div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
            {{session('msg')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
            <h1 class="display-5 fw-bold lh-1 mb-3">Data Customer</h1>
            <hr class="my-4">
            <a href="customer/create" class="btn btn-dark mb-1">Tambah Customer</a>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Email</th>
                        <th scope="col">No. HP</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($customer as $cus)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $cus->nama_customer }}</td>
                        <td>{{ $cus->alamat }}</td>
                        <td>{{ $cus->jenis_kelamin }}</td>
                        <td>{{ $cus->email }}</td>
                        <td>{{ $cus->no_telp }}</td>
                        <td>
                            <a href="customer/edit/{{ $cus->id_customer }}" class="badge bg-warning"><i class='bx bxs-pencil bx-sm'></i></a>
                            <a href="customer/destroy/{{ $cus->id_customer }}" class="badge bg-danger"><i class='bx bxs-trash bx-sm' ></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
