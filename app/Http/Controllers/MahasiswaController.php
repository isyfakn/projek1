<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mahasiswa = Mahasiswa::orderBy('id', 'asc')->get();
        return view('v_mahasiswa.index', [
            'judul' => 'Data Mahasiswa',
            'mahasiswa' => $mahasiswa
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
{
    $mahasiswa = Mahasiswa::orderBy('id', 'asc')->get();
        return view('v_mahasiswa.create', [
            'judul' => 'Data Mahasiswa',
            'mahasiswa' => $mahasiswa
        ]);
}


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // ddd($request->all());
        $validatedData = $request->validate([
            'nim' => 'required',
            'nama' => 'required',
            'prodi' => 'required',
            'fakultas' => 'required',
            'jenis_kelamin' => 'required',
        ]);
        Mahasiswa::create($validatedData);
        return redirect('mahasiswa')->with('success', 'Data berhasil tersimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}