@extends('layouts.main')
@section('title', 'Mahasiswa')
@section('content')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @if (session('flash'))
        <div class="alert alert-primary">
            {{ session('flash') }}
        </div>
    @endif
    @if (session('danger'))
        <div class="alert alert-danger">
            {{ session('danger') }}
        </div>
    @endif
    <div class="card">
        <div class="card-header">
            <a href="/mahasiswa/formtambah" class="btn btn-primary" role="button"><iclass="bi bi-plus-square-fill"></i>Mahasiswa</a>
            <form action="/mahasiswa/pencarian" method="GET" class="form-inline my-2 my-lg-0 float-right">
                <input name="q" class="form-control mr-sm-2" type="search"placeholder="Tuliskan Nama"aria-label="Search">
                <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
            </form>
            <form action="/mahasiswa/pencariannama" method="GET" class="form-inline my-2 my-lg-0 float-right mr-2">
                <input name="a" class="form-control mr-sm-2" type="search"placeholder="Tuliskan Nim"aria-label="Seacrh">
                <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
        <div class="card-body"></div>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nim</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Jurusan</th>
                    <th scope="col">Minat</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mhs as $idx => $m)
                    <tr>
                        <!-- <th scope="row">{{ $mhs->firstItem() + $idx }}</th> -->
                        <td>{{ $m->id }}</td>
                        <td>{{ $m->nim }}</td>
                        <td>{{ $m->nama }}</td>
                        <td>{{ $m->gender }}</td>
                        <td>{{ $m->jurusan }}</td>
                        <td>{{ $m->minat }}</td>
                        <td>
                            <a href="/mahasiswa/formedit/{{ $m->id }}" class="btn btn-success" role="button"><i class="bi bi-pencil-square"></i></a>

                            <button type="button" class="btn btn-warning" data-toggle="modal"data-target="#exampleModal"><i class="bi bi-trash"></i></button>

                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"aria-labelledby="exampleModalLabel">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Warning</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Apakah Anda Yakin Ingin Menghapus?</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Kembali</button>
                                            <a href="/mahasiswa/delete/{{ $m->id }}" class="btn btn-warning"
                                                role="button"><i class="bi bi-trash"></i></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <span class="float-right">{{ $mhs->links() }}</span>
    </div>
    </div>
@endsection
