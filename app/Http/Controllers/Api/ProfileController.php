<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        return Profile::all();
    }

    public function store(Request $request)
    {
        return Profile::create($request->all());
    }

    public function show($id)
    {
        return Profile::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $data = Profile::findOrFail($id);
        $data->update($request->all());
        return $data;
    }

    public function destroy($id)
    {
        Profile::destroy($id);
        return ['message' => 'deleted'];
    }
}
