<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // 🔹 LOGIN (boleh dipindah ke AuthController kapan saja)
    public function login(Request $request)
    {
        $request->validate([
            'nis' => 'required',
            'password' => 'required'
        ]);

        $user = User::where('nis', $request->nis)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return response()->json([
                'success' => false,
                'message' => 'NIS atau password salah'
            ], 401);
        }

        return response()->json([
            'success' => true,
            'message' => 'Login berhasil',
            'user' => [
                'id' => $user->id,
                'nis' => $user->nis
            ]
        ], 200);
    }

    // 🔹 REGISTRASI (OPSIONAL, SIAP DIPAKAI KE DEPAN)
    public function store(Request $request)
    {
        $request->validate([
            'nis' => 'required|unique:users,nis',
            'password' => 'required|min:6'
        ]);

        $user = User::create([
            'nis' => $request->nis,
            'password' => Hash::make($request->password)
        ]);

        return response()->json([
            'success' => true,
            'message' => 'User berhasil didaftarkan',
            'user' => [
                'id' => $user->id,
                'nis' => $user->nis
            ]
        ], 201);
    }

    // 🔹 DETAIL USER
    public function show($id)
    {
        $user = User::findOrFail($id);

        return response()->json([
            'success' => true,
            'user' => [
                'id' => $user->id,
                'nis' => $user->nis
            ]
        ]);
    }

    // 🔹 UPDATE USER (PASSWORD OPSIONAL)
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $request->validate([
            'nis' => 'required|unique:users,nis,' . $user->id,
            'password' => 'nullable|min:6'
        ]);

        $data = [
            'nis' => $request->nis
        ];

        if ($request->filled('password')) {
            $data['password'] = Hash::make($request->password);
        }

        $user->update($data);

        return response()->json([
            'success' => true,
            'message' => 'User berhasil diperbarui',
            'user' => [
                'id' => $user->id,
                'nis' => $user->nis
            ]
        ]);
    }

    // 🔹 HAPUS USER
    public function destroy($id)
    {
        User::findOrFail($id)->delete();

        return response()->json([
            'success' => true,
            'message' => 'User berhasil dihapus'
        ]);
    }
}
