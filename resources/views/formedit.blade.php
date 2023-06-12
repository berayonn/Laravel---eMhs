@extends('layouts.main')
@section('title', 'Mahasiswa')
@section('content')

<div class="card mt-4">
        <div class="card-header"></div>
        <div class="card-body">
            @php
                $minat = explode(',', $mhs->minat);
            @endphp
            <form action="/mahasiswa/update/{{ $mhs->id }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group w-25">
                    <label>NIM</label>
                    <input type="number" name="nim" class="form-control" value="{{ $mhs->nim }}" readonly>
                </div>

                <div class="form-group w-50">
                    <label>Nama</label>
                    <input type="text" name="nama" class="form-control" value="{{ $mhs->nama }}">
                </div>

                <label>Gender</label>
                <div class="form-check w-25">
                    <input type="radio" name="gender" value="pria" class="form-check-input" {{ ($mhs->gender == 'pria') ? 'checked':''}}>
                    <label>Pria</label>
                </div>
                <div class="form-check w-25">
                    <input type="radio" name="gender" value="wanita" class="form-check-input" {{ ($mhs->gender == 'wanita') ? 'checked':''}}>
                    <label>Wanita</label>
                </div>

                <div class="form-group w-50">
                    <label>Program Studi</label>
                    <select name="jurusan" class="form-control">
                        <option value="0">--Pilih Program Studi--</option>
                        <option value="Sistem Informasi" {{ ($mhs->jurusan == 'Sistem Informasi') ? 'Selected':'' }}>Sistem Informasi</option>
                        <option value="Sains Data" {{ ($mhs->jurusan == 'Sains Data') ? 'Selected':'' }}>Sains Data</option>
                        <option value="Manajemen" {{ ($mhs->jurusan == 'Manajemen') ? 'Selected':'' }}>Manajemen</option>
                        <option value="Teknik Komputer" {{ ($mhs->jurusan == 'Teknik Komputer') ? 'Selected':'' }}>Teknik Komputer</option>
                    </select>
                    <!-- <input type="text" class="form-control" placeholder="Enter Minat"> -->
                </div>

                <label>Minat</label>
                <div class="form-check w-25">
                    <input type="checkbox" name="minat[]" value="ai" class="form-check-input" {{ in_array('ai', $minat) ? 'checked' :'' }}>
                    <label>Artificial Intelegent</label>
                </div>
                <div class="form-check w-25">
                    <input type="checkbox" name="minat[]" value="web" class="form-check-input" {{ in_array('web', $minat) ? 'checked' :'' }}>
                    <label>Web Engineering</label>
                </div>
                <div class="form-check w-25">
                    <input type="checkbox" name="minat[]" value="dbms" class="form-check-input" {{ in_array('dbms', $minat) ? 'checked' :'' }}> 
                    <label>Data Engineering</label>
                </div>

                <button type="submit" class="btn btn-primary mt-2">Submit</button>
            </form>
        </div>
    </div>

@endsection