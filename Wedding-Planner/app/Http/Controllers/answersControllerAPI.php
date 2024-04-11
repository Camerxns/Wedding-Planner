<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\answers;

class answersControllerAPI extends Controller
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
    public function store(Request $request)
    {
        $request->validate([
            'answer1' => ['required'],
            'fullName' => ['required'],
            'answer2' => ['required'],
            'potlock' => ['required']
        ]);

        $answer1 = $request->input('answer1');
        $fullName = $request->input('fullName');
        $answer2 = $request->input('answer2');
        $potluck = $request->input('potluck');

        dd($request->all());


        answers::create([
            'answer1' => $answer1,
            'fullName' => $fullName,
            'answer2' => $answer2,
            'potluck' => $potluck
        ]);
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
