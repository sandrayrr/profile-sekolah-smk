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
        return Inertia::render('Beranda/Create');
    }

    public function store(Request $request)
    {
        $request->validate(['judul' => 'required']);
        Beranda::create($request->all());
        return redirect()->route('beranda.index');
    }

    public function edit($id)
    {
        return Inertia::render('Beranda/Edit', [
            'item' => Beranda::findOrFail($id)
        ]);
    }

    public function update(Request $request, $id)
    {
        Beranda::findOrFail($id)->update($request->all());
        return redirect()->route('beranda.index');
    }

    public function destroy($id)
    {
        Beranda::findOrFail($id)->delete();
        return redirect()->route('beranda.index');
    }
}