<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;

class ApiUserController extends Controller
{
    public function index()
    {
        $users = User::all();
        if ($users->isEmpty()) {
            return response()->json([
                'status' => false,
                'message' => 'No users found',
                'data' => []
            ]);
        } else {
            return response()->json([
                'status' => true,
                'message' => 'Success',
                'data' => UserResource::collection($users)
            ]);
        }
    }
}
