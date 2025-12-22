<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Certificate;

class CertificateController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'file' => 'required|file|mimes:pdf,jpg,png|max:2048'
        ]);

        // simpan file
        $path = $request->file('file')->store('certificates', 'public');

        // simpan ke database (HANYA PATH)
        $certificate = Certificate::create([
            'title' => $request->title,
            'file_path' => $path,
        ]);

        return response()->json([
            'message' => 'Sertifikat berhasil diupload',
            'data' => [
                'id' => $certificate->id,
                'title' => $certificate->title,
                'file_path' => $certificate->file_path,
                'file_url' => asset('storage/' . $certificate->file_path),
                'created_at' => $certificate->created_at,
            ]
        ], 201);
    }
}
