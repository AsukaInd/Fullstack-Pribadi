<?php

namespace App\Http\Controllers;

use App\Models\Reads;
use App\Models\User;
use Illuminate\Http\Request;
use PHPUnit\Framework\TestStatus\Success;
use Validator;

class ReadsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $read = Reads::all();
        return $read;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = Validator::make($request->all(), [
            'name' => 'required|alpha_dash',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
        ]);

        if ($validated->fails()) {
            return response()->json([
                'message' => $validated->getMessageBag()
            ], 400);
        }

        $input = $request->all();

        // User::create([
        //     'name' => $input['name'],
        //     'password' => $input['password'],
        //     'email' => $input['email']
        // ]);
        User::create($request->all());

        return response()->json([
            'test' => $request->email,
            'Message' => 'success'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Reads $reads)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reads $reads)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reads $reads)
    {
        //
    }
}
