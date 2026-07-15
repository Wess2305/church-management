<?php

namespace App\Http\Controllers;

use App\Models\Jemaat;
use Illuminate\Http\Request;
class JemaatController extends Controller
{
    public function index(Request $request)
    {

    $search = $request->search;

    $jemaats = Jemaat::when($search, function ($query) use ($search) {
        $query->where('nama', 'like', "%{$search}%");
    })->get();
    
    return view('jemaat.index', compact('jemaats'));
    }
    public function create()
{
    return view('jemaat.create');
}

public function store(Request $request)
{
    $request->validate([
    'nama' => 'required|max:100',
    'tanggal_lahir' => 'required',
    'jenis_kelamin' => 'required',
    'alamat' => 'required',
    'no_hp' => 'required|max:20',
    'email' => 'required|email',
]);
    Jemaat::create([
        'nama' => $request->nama,
        'tanggal_lahir' => $request->tanggal_lahir,
        'jenis_kelamin' => $request->jenis_kelamin,
        'alamat' => $request->alamat,
        'no_hp' => $request->no_hp,
        'email' => $request->email,
    ]);

    return redirect('/jemaat')
    ->with('success', 'Data jemaat berhasil ditambahkan!');
}
public function edit($id)
{
    $jemaat = Jemaat::findOrFail($id);

    return view('jemaat.edit', compact('jemaat'));
}

public function update(Request $request, $id)
{
    $request->validate([
        'nama' => 'required|max:100',
        'tanggal_lahir' => 'required',
        'jenis_kelamin' => 'required',
        'alamat' => 'required',
        'no_hp' => 'required|max:20',
        'email' => 'required|email',
    ]);

    $jemaat = Jemaat::findOrFail($id);

    $jemaat->update([
        'nama' => $request->nama,
        'tanggal_lahir' => $request->tanggal_lahir,
        'jenis_kelamin' => $request->jenis_kelamin,
        'alamat' => $request->alamat,
        'no_hp' => $request->no_hp,
        'email' => $request->email,
    ]);

    return redirect('/jemaat')
    ->with('success', 'Data jemaat berhasil diperbarui!');
}

public function destroy($id)
{
    $jemaat = Jemaat::findOrFail($id);

    $jemaat->delete();

    return redirect('/jemaat')
    ->with('success', 'Data jemaat berhasil dihapus!');
}

}