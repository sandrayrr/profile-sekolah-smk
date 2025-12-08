<?php

namespace App\Http\Controllers;
use Inertia\Inertia;
use App\Models\Beranda;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index()
    {
        $data = Beranda::all();
        return Inertia::render('beranda/index', [
            'data' => $data
        ]);
    }

    public function create()
    {
        return Inertia::render('beranda/Create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'sambutan' => 'required'
        ]);
        // Ensure only one sambutan exists - delete all existing and create new
        Beranda::truncate();
        Beranda::create($request->all());
        return redirect()->route('beranda.index');
    }

    public function edit($id)
    {
        return Inertia::render('beranda/Edit', [
            'item' => Beranda::findOrFail($id)
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required',
            'sambutan' => 'required'
        ]);
        Beranda::findOrFail($id)->update($request->all());
        return redirect()->route('beranda.index');
    }

    public function destroy($id)
    {
        Beranda::findOrFail($id)->delete();
        return redirect()->route('beranda.index');
    }

    public function publicIndex()
    {
        $beranda = Beranda::first(); // Assuming only one sambutan, or you can adjust logic
        return view('pages.beranda', compact('beranda'));
    }
}
