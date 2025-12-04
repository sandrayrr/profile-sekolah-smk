<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index()
{
    return view('pages.beranda', [
        'sliders' => Slider::all()
    ]);
}

public function store(Request $request)
{
    $data = $request->validate([
        'judul' => 'required',
        'gambar' => 'nullable|image'
    ]);

    if ($request->gambar) {
        $data['gambar'] = $request->gambar->store('slider');
    }

    Slider::create($data);

    return redirect()->back()->with('success', 'Berhasil ditambah');
}

public function update(Request $request, Slider $slider)
{
    $data = $request->validate([
        'judul' => 'required',
        'gambar' => 'nullable|image'
    ]);

    if ($request->gambar) {
        $data['gambar'] = $request->gambar->store('slider');
    }

    $slider->update($data);

    return redirect()->back()->with('success', 'Berhasil diupdate');
}

public function destroy(Slider $slider)
{
    $slider->delete();
    return back();
}
}