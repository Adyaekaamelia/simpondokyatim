<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Kebutuhan;

class ApiController extends Controller
{
    public function kebutuhan()
    {
        $kebutuhan = Kebutuhan::all();
        // dd($kegiatan);
        return response()->json([
            'success' => true,
            'message' => 'Data Kebutuhan',
            'data' => $kebutuhan,
        ], 200);
    }
}
