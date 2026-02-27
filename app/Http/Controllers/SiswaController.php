<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa; // Pastikan ini ada biar bisa akses data siswa

class SiswaController extends Controller
{
    public function index() {
        $siswa = Siswa::all();
        return view('siswa.index', compact('siswa'));
    }
    
    public function create() {
        return view('siswa.create');
    }

    public function store(Request $request) {
        Siswa::create($request->all());
        return redirect()->route('siswa.index');
    }

    public function edit($id) {
        $siswa = Siswa::findOrFail($id);
        return view('siswa.edit', compact('siswa'));
    }

    public function update(Request $request, $id) {
        $siswa = Siswa::findOrFail($id);
        $siswa->update($request->all());
        return redirect()->route('siswa.index');
    }

    public function destroy($id) {
        $siswa = Siswa::findOrFail($id);
        $siswa->delete();
        return redirect()->route('siswa.index');
    }
}