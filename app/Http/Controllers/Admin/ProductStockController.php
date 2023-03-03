<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class ProductStockController extends Controller
{
    public function index()
    {
        $response = Http::withHeaders([
            'Content-Type' => 'application/x-www-form-urlencoded',
        ])->asForm()->post('http://149.129.221.143/kanaldata/Webservice/bank_account', [
            'bank_id' => '2'
        ]);
        if ($response->successful()) {
            $data = $response->json()['data'];
            return response()->json([
                'status' => true,
                'message' => 'Get account',
                'data' => $data
            ], 200);
        } else {
            return response()->json([
                'status' => false,
                'message' => 'Failed to get account'
            ], 404);
        }
    }
}
