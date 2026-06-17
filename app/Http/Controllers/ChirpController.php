<?php

namespace App\Http\Controllers;

use App\Models\Chirps;
use Illuminate\Http\Request;
class ChirpController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $chirps = Chirps::with('user')
        ->latest()
        ->take(50)
        ->get();

        return view('home',compact('chirps'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'message'=>'required|string|max:255'
        ]
        );

        Chirps::create(
            [
                'message' => $validate['message'],
                'user_id' => null
            ]
        );

        return redirect('/')->with('sucess','Chirp Created');
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
