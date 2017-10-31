<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengguna;

class PenggunaController extends Controller
{
    public function index()
    {
        return Pengguna::all();
    }

    public function show(Pengguna $pengguna)
    {
        return $pengguna;
    }

    public function store(Request $request)
    {
        $pengguna = Pengguna::create($request->all());
        return response()->json($pengguna, 201);
    }

    public function update(Request $request, Pengguna $pengguna)
    {
        $pengguna->update($request->all());
        return response()->json($pengguna, 200);
    }

    public function delete(Pengguna $pengguna)
    {
        $pengguna->delete();
        return response()->json(null, 204);
    }
}
