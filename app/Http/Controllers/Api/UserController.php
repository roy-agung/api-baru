<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return User::all();
    }

    public function store(Request $request)
    {
        return User::create([
            'nis' => $request->nis,
            'password' => bcrypt($request->password)
        ]);
    }

    public function show($id)
    {
        return User::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $data = User::findOrFail($id);
        $data->update([
            'nis' => $request->nis,
            'password' => bcrypt($request->password)
        ]);
        return $data;
    }

    public function destroy($id)
    {
        User::destroy($id);
        return ['message' => 'deleted'];
    }
}
