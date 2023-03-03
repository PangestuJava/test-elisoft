<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SwappingController extends Controller
{
    public function index()
    {
        // view
        return view('admin.swap.index', [
            'title' => 'Swapping Variable'
        ]);
    }

    public function store(Request $request)
    {
        $a = $request->a;
        $b = $request->b;

        $a = $a . $b;
        $b = substr($a, 0, strlen($a) - strlen($b));
        $a = substr($a, strlen($b));

        return response()->json([
            'status' => 'success',
            'message' => 'Swapping successfully!!',
            'a' => $a,
            'b' => $b
        ]);
    }
}
