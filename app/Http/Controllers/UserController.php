<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

public function store(Request $request)
{
    $validator = Validator::make($request->all(), [
        'full_name' => 'required|string',
        'email' => 'required|email|unique:users,email',
        'roles' => 'required|array',
        'roles.*' => 'exists:roles,name'
    ]);

    if ($validator->fails()) {
        return response()->json(['errors' => $validator->errors()], 422);
    }

    $user = User::create([
        'full_name' => $request->full_name,
        'email' => $request->email
    ]);

    $roleIds = Role::whereIn('name', $request->roles)->pluck('id');
    $user->roles()->attach($roleIds);

    return response()->json(['message' => 'User created successfully'], 201);
}

public function index(Request $request)
{
    $roleName = $request->query('role');

    $query = User::with('roles');

    if ($roleName) {
        $query->whereHas('roles', function ($q) use ($roleName) {
            $q->where('name', $roleName);
        });
    }

    return response()->json($query->get());
}

