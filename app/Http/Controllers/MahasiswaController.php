<?php
namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use App\Http\Controllers;

class MahasiswaController extends Controller {
    public function index() {
        $mahasiswas = Mahasiswa::all();
        return view('mahasiswa.index', compact('mahasiswas'));
    }

    public function create() {
        return view('mahasiswa.create');
    }

    public function store(Request $request) {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'nim' => 'required|unique:mahasiswas,nim|max:15',
            'jurusan' => 'required|string|max:255',
        ]);

        Mahasiswa::create($validatedData);
        return redirect()->route('mahasiswa.index')->with('success', 'Mahasiswa berhasil ditambahkan.');
    }

    public function edit(Mahasiswa $mahasiswa) {
        return view('mahasiswa.edit', compact('mahasiswa'));
    }

    public function update(Request $request, Mahasiswa $mahasiswa) {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'nim' => 'required|unique:mahasiswas,nim,' . $mahasiswa->id . '|max:15',
            'jurusan' => 'required|string|max:255',
        ]);

        $mahasiswa->update($validatedData);
        return redirect()->route('mahasiswa.index')->with('success', 'Data mahasiswa berhasil diperbarui.');
    }

    public function destroy(Mahasiswa $mahasiswa) {
        $mahasiswa->delete();
        return redirect()->route('mahasiswa.index')->with('success', 'Data mahasiswa berhasil dihapus.');
    }
}
