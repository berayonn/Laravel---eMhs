<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;

class MhsAPIController extends Controller
{
    public function read()
    {
        $mhs = Mahasiswa::all();
        return response()->json([
            'success' => true,
            'message' => 'Data Berhasil Di Tampilkan',
            'data' => $mhs
        ], 200);
    }

    public function create(Request $request)
    {
        $mhs = Mahasiswa::create([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'gender' => $request->gender,
            'jurusan' => $request->jurusan,
            'minat' => $request->minat
        ]);

        if($mhs)
        {
            return response()->json([
                'success' => true,
                'message' => 'Data Berhasil Di Tampilkan',
                'data' => $mhs
            ], 400);
        } else{
            return response()->json([
                'success' => false,
                'message' => 'Data Gagal Di Tampilkan',
                'data' => $mhs
            ], 200); 
        }

    }

    public function update($id, Request $request)
    {
        $mhs = Mahasiswa::find($id)->update([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'gender' => $request->gender,
            'jurusan' => $request->jurusan,
            'minat' => $request->minat
        ]);

        if($mhs)
        {
            return response()->json([
                'success' => true,
                'message' => 'Data Berhasil Di Update',
                'data' => $mhs
            ], 400);
        } else{
            return response()->json([
                'success' => false,
                'message' => 'Data Gagal Di Update',
                'data' => $mhs
            ], 200); 
        }   
    }

    public function delete($id)
    {
        $mhs = Mahasiswa::find($id)->delete();
        if($mhs)
        {
            return response()->json([
                'success' => true,
                'message' => 'Data Berhasil Di Hapus',
                'data' => $mhs
            ], 400);
        } else{
            return response()->json([
                'success' => false,
                'message' => 'Data Gagal Di Hapus',
                'data' => $mhs
            ], 200); 
        }   

    }

}
