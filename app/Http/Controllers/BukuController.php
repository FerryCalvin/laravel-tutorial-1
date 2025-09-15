<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class BukuController extends Controller {

    function index() {

        $buku = Buku::all();

        return view('buku.index', compact('buku'));

    }

    function create() {

    }

    function store(Request $request) {

        $validated = $request->validate([
            'judul' => 'required',
            'pengarang' => 'required',
            'tahun_terbit' => 'required|integer'
        ]);

        Buku::create($validated);

        return redirect()->route('buku.index')->with('success', 'Buku berhasil ditambahkan');

    }

    function show($id) {

    }

    function edit($id) {

        $buku = Buku::all();
        $bukuDetail = Buku::findOrFail($id);
        return view('buku.index', compact('buku', 'bukuDetail'));

    }

    function update(Request $request, $id) {
        $validated = $request->validate([
            'judul' => 'required',
            'pengarang' => 'required',
            'tahun_terbit' => 'required|integer'
        ]);

        Buku::where('id', $id)->update($validated);
        return redirect()->route('buku.index')->with('success', 'Buku berhasil diupdate');
    }

    function delete($id) {

        Buku::where('id', $id)->delete();
        return redirect()->route('buku.index')->with('success', 'Buku berhasil dihapus');

    }

}





?>
