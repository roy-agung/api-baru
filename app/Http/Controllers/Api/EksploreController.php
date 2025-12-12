<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Eksplore;
use Illuminate\Http\Request;

class EksploreController extends Controller
{
    public function index()
    {
        return Eksplore::all();
    }

    public function store(Request $request)
    {
        return Eksplore::create($request->all());
    }

    public function show($id)
    {
        return Eksplore::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $data = Eksplore::findOrFail($id);
        $data->update($request->all());
        return $data;
    }

    public function destroy($id)
    {
        Eksplore::destroy($id);
        return ['message' => 'deleted'];
    }
}
