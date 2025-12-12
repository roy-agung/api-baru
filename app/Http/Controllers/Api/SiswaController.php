<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        return Siswa::all();
    }

    public function store(Request $request)
    {
        return Siswa::create($request->all());
    }

    public function show($id)
    {
        return Siswa::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $data = Siswa::findOrFail($id);
        $data->update($request->all());
        return $data;
    }

    public function destroy($id)
    {
        Siswa::destroy($id);
        return ['message' => 'deleted'];
    }
}
