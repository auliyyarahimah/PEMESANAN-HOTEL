<?php

namespace App\Http\Controllers;

use App\Models\Harga_hari_ini;
use App\Models\Kamar;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class HargaHariIniController extends Controller
{
    public function index(): View
    {
        $hargahariini = Harga_hari_ini::latest()->paginate(10);
        return view('levelAdmin.hargahariini.index', compact('hargahariini'));
    }

    public function create()
    {
        $kamar = Kamar::all();
        return view('levelAdmin.hargahariini.create', compact('kamar'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'harga' => 'required',
            'available_room' => 'required',
            'tanggal' => 'required',
            'id_kamar' => 'required',
        ]);

        Harga_hari_ini::create($request->all());

        return redirect()->route('admin.hargahariini.index')
            ->with('success', 'Harga hari ini berhasil ditambahkan.');
    }

    public function show(string $id): View
    {
        $hargahariini = Harga_hari_ini::findOrFail($id);

        return view('levelAdmin.hargahariini.show', compact('hargahariini'));
    }
    public function edit(string $id)
    {
        $hargahariini = Harga_hari_ini::findOrFail($id);
        $kamar = Kamar::all();
        return view('levelAdmin.hargahariini.edit', compact('hargahariini', 'kamar'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $request->validate([
            'harga' => 'required',
            'available_room' => 'required',
            'tanggal' => 'required',
            'id_kamar' => 'required',
        ]);

        $hargahariini = Harga_hari_ini::findOrFail($id);
        $hargahariini->update($request->all());

        return redirect()->route('admin.hargahariini.index')
            ->with('success', 'Data harga hari ini berhasil diubah!.');
    }

    public function destroy($id): RedirectResponse
    {
        $hargahariini = Harga_hari_ini::findOrFail($id);
        $hargahariini->delete();
        return redirect()->route('admin.hargahariini.index')->with(['success' => 'Data harga hari ini Berhasil Dihapus!']);
    }
}
