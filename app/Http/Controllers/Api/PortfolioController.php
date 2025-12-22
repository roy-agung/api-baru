<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Portfolio;

class PortfolioController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'file'  => 'nullable|file|mimes:pdf,jpg,png,zip|max:4096',
            'link'  => 'nullable|url'
        ]);

        if (!$request->file && !$request->link) {
            return response()->json([
                'message' => 'File atau link wajib diisi'
            ], 422);
        }

        $filePath = null;

        if ($request->hasFile('file')) {
            $filePath = $request->file('file')->store('portfolios', 'public');
        }

        $portfolio = Portfolio::create([
            'title' => $request->title,
            'file_path' => $filePath,
            'file_url' => $filePath ? asset('storage/'.$filePath) : null,
            'link' => $request->link
        ]);

        return response()->json([
            'message' => 'Portofolio berhasil diupload',
            'data' => $portfolio
        ], 201);
    }
}
