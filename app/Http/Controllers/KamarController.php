<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class KamarController extends Controller
{
    
    public function index(): View
    {
        $kamar = Kamar::latest()->paginate(10);
        return view('levelAdmin.kamar.index', compact('kamar'));
    }

    public function create()
    {
        $kamar = Kamar::all();
        return view('levelAdmin.kamar.create', compact('kamar'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_kamar' => 'required|string|max:100',
            'jenis_kamar' => 'required',
            'ukuran_kamar' => 'required',
            'harga' => 'required',
        ]);

        Kamar::create($request->all());

        return redirect()->route('admin.kamar.index')
            ->with('success', 'Kamar berhasil ditambahkan.');
    }

    public function show(string $id): View
    {
        $kamar = Kamar::findOrFail($id);

        return view('levelAdmin.kamar.show', compact('kamar'));
    }
    public function edit(string $id)
    {
        $kamar = Kamar::findOrFail($id);

        return view('levelAdmin.kamar.edit', compact('kamar'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $request->validate([
            'nama_kamar' => 'required|string|max:100',
            'jenis_kamar' => 'required',
            'ukuran_kamar' => 'required',
            'harga' => 'required',
        ]);

        $kamar = Kamar::findOrFail($id);
        $kamar->update($request->all());

        return redirect()->route('admin.kamar.index')->with('success', 'Data kamar berhasil diubah!.');
    }

    public function destroy($id): RedirectResponse
    {
        $kamar = Kamar::findOrFail($id);
        $kamar->delete();
        return redirect()->route('admin.customer.index')->with(['success' => 'Data Kamar Berhasil Dihapus!']);
    }
}
