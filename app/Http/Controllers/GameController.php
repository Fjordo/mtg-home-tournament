<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use App\Models\Game;
use App\Models\User;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $users = User::orderBy('name', 'asc')->get();
        return view('games.index', compact('users'));
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
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'position' => 'required',
            'first_blood' => 'required',
        ]);


        // Estrai i valori delle posizioni dall'array $request
        $positions = array_values(array_filter($request->all(), function ($key) {
            return strpos($key, 'position_') === 0;
        }, ARRAY_FILTER_USE_KEY));


        $game = Game::create([
            'position' => $positions,
            'first_blood' => $request->first_blood,
            'commander_kill' => $request->commander_kill,
            'multi_kill' => $request->multi_kill,
            'rescue' => $request->rescue,
            'aesthetics' => $request->aesthetics,
            'best_play' => $request->best_play,
            'comments' => $request->comments,
        ]);
        // $request->user()->games()->create($validated);

        return redirect(route('game.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Game $game)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Game $game)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Game $game)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Game $game)
    {
        //
    }
}
