<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; // Pastikan menggunakan Illuminate\Http\Request untuk mengakses class Request
use App\Models\Lip;

class LipController extends Controller
{
    public function index()
    {
        $lippies = Lip::all();
        return view('lippies.index', compact('lippies'));
    }

    public function create()
    {
        return view('lippies.create');
    }

    public function store(Request $request)
    {
        $lippy = new Lip();
        $lippy->brand = $request->brand;
        $lippy->type = $request->type;
        $lippy->shade = $request->shade;
        $lippy->price = $request->price;

        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $filename = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('images', $filename, 'public');
            $lippy->img = $path;
        }

        $lippy->save();

        return redirect()->route('lippies.index');
    }
}
