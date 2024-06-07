<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index()
    {
        return view('kelas.index', ['kelas' => Kelas::latest()->paginate(10)]);
    }

    public function create()
    {
        return view('kelas.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'kode_kelas' => 'required|max:12',
            'nama_kelas' => 'required|max:20',
            'tingkat' => 'required|max:100',
        ]);

        Kelas::create($validatedData);

        return redirect()->route('kalas.index')->with('success', 'Data kelas berhasil disimpan');
    }

    public function show($id)
    {
        $kelas = Kelas::findOrFail($id);
        return view('kelas.show', ['kelas' => $kelas]);
    }

    public function edit($id)
    {
        $kelas = Kelas::findOrFail($id);
        return view('kelas.edit', ['kelas' => $kelas]);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'kode_kelas' => 'required|max:12',
            'nama_kelas' => 'required|max:20',
            'tingkat' => 'required|max:100',
        ]);

        $kelas = Kelas::findOrFail($id);
        $kelas->update($validatedData);

        return redirect()->route('kelas.index')->with('success', 'Data kelas berhasil diupdate');
    }

    public function destroy($id)
    {
        $kelas = Kelas::findOrFail($id);
        $kelas->delete();

        return redirect()->route('kelas.index')->with('success', 'Data kelas berhasil dihapus');
    }
}

