<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidateProfileRequest;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ValidateProfileRequest $request)
    {
        $user = User::create($request->validated());

        return response()->json($user, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ValidateProfileRequest $request, string $userId)
    {
        $user = User::where('id', $userId)->first();

        $user->update($request->validated());

        if (!$user) {
            return response()->json('Not found!', 404);
        }

        return response()->json($user, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}