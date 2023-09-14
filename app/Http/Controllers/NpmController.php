<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Npm;

class NpmController extends Controller
{
    public function index()
    {
        // Tampilkan data entitas "/npm"
        $npms = Npm::all();
        return view('npm.index', ['npms' => $npms]);
    }

    public function create()
    {
        // Tampilkan formulir tambah data
        return view('npm.create');
    }

    public function store(Request $request)
    {
        // Validasi data dan proses tambah data
        // Simpan data baru ke dalam tabel
    }

    public function edit($id)
    {
        // Tampilkan formulir edit data dengan ID tertentu
        $npm = Npm::find($id);
        return view('npm.edit', ['npm' => $npm]);
    }

    public function update(Request $request, $id)
    {
        // Validasi data dan proses edit data
        // Simpan perubahan data ke dalam tabel
    }

    public function destroy($id)
    {
        // Proses hapus data dengan ID tertentu
    }
}