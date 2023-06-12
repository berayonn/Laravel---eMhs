<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TaskAPIController extends Controller
{
    public function read()
    {
        $task = Task::all();
        return response()->json([
            'success' => true,
            'message' => 'Data Berhasil Di Tampilkan',
            'data' => $task
        ], 200);
    }

    public function create(Request $request)
    {
        $task = Task::create([
            'nama' => $request->nama,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi
        ]);

        if($task)
        {
            return response()->json([
                'success' => true,
                'message' => 'Data Berhasil Di Tambahkan',
                'data' => $task
            ], 400);
        } else{
            return response()->json([
                'success' => false,
                'message' => 'Data Gagal Di Tambahkan',
                'data' => $task
            ], 200); 
        }

    }

    public function update($id, Request $request)
    {
        $task = Task::find($id)->update([
            'nama' => $request->nama,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi
        ]);

        if($task)
        {
            return response()->json([
                'success' => true,
                'message' => 'Data Berhasil Di Update',
                'data' => $task
            ], 400);
        } else{
            return response()->json([
                'success' => false,
                'message' => 'Data Gagal Di Update',
                'data' => $task
            ], 200); 
        }   
    }

    public function delete($id)
    {
        $task = Task::find($id)->delete();
        if($task)
        {
            return response()->json([
                'success' => true,
                'message' => 'Data Berhasil Di Hapus',
                'data' => $task
            ], 400);
        } else{
            return response()->json([
                'success' => false,
                'message' => 'Data Gagal Di Hapus',
                'data' => $task
            ], 200); 
        }   

    }

}


