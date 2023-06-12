@extends('layouts.main')
@section('title', 'Mahasiswa')
@section('content')
    <div class="card mt-4">
        <div class="card-header"></div>
        <div class="card-body">
            <form action="/mahasiswa/simpan" method="POST">
                @csrf
                <div class="form-group w-25">
                    <label>NIM</label>
                    <input type="number" name="nim" class="form-control" placeholder="Enter NIM">
                </div>

                <div class="form-group w-50">
                    <label>Nama</label>
                    <input type="text" name="nama" class="form-control" placeholder="Enter Nama">
                </div>

                <label>Gender</label>
                <div class="form-check w-25">
                    <input type="radio" name="gender" value="pria" class="form-check-input" checked>
                    <label>Pria</label>
                </div>
                <div class="form-check w-25">
                    <input type="radio" name="gender" value="wanita" class="form-check-input">
                    <label>Wanita</label>
                </div>

                <div class="form-group w-50">
                    <label>Program Studi</label>
                    <select name="jurusan" class="form-control">
                        <option value="0">--Pilih Program Studi--</option>
                        <option value="Sistem Informasi">Sistem Informasi</option>
                        <option value="Sains Data">Sains Data</option>
                        <option value="Manajemen">Manajemen</option>
                        <option value="Teknik Komputer">Teknik Komputer</option>
                    </select>
                    <!-- <input type="text" class="form-control" placeholder="Enter Minat"> -->
                </div>

                <label>Minat</label>
                <div class="form-check w-25">
                    <input type="checkbox" name="minat[]" value="ai" class="form-check-input">
                    <label>Artificial Intelegent</label>
                </div>
                <div class="form-check w-25">
                    <input type="checkbox" name="minat" value="web" class="form-check-input">
                    <label>Web Engineering</label>
                </div>
                <div class="form-check w-25">
                    <input type="checkbox" name="minat" value="dbms" class="form-check-input">
                    <label>Data Engineering</label>
                </div>

                <button type="submit" class="btn btn-primary mt-2">Submit</button>
            </form>
        </div>
    </div>
@endsection
