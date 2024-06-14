<?php

namespace App\Http\Controllers;

use App\Http\Requests\TrainRequest;
use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trains = Train::all();

        return view('train.monitoring', compact('trains'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('train.insert');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TrainRequest $request)
    {
        Train::create([
            'number' => $request->input('number'),
            'trip' => $request->input('trip'),
            'location' => $request->input('location'),
            'next_trip' => $request->input('next_trip'),
            'speed' => $request->input('speed'),
            'users' => $request->input('users'),
        ]);

        return redirect()->route('monitoring')->with('msg','Train successfully added to your list');
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
