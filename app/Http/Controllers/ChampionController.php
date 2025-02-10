<?php

namespace App\Http\Controllers;

use App\Models\Champion;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ChampionController extends Controller
{
    public function index(): View {
        $champions = Champion::all();
        return view('champions.index', compact('champions'));
    }

    public function create(): View {
        return view('champions.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            'role' => 'required',
            'lane' => 'required',
            'origin' => 'required',
            'release_date' => 'required|date',
        ]);

        Champion::create($request->all());

        return redirect()->route('champions.index');
    }

    public function edit(Champion $champion): View {
        return view('champions.edit', compact('champion'));
    }

    public function update(Request $request, Champion $champion): RedirectResponse {
        $request->validate([
            'name' => 'required',
            'role' => 'required',
            'lane' => 'required',
            'origin' => 'required',
            'release_date' => 'required|date',
        ]);

        $champion->update($request->all());

        return redirect()->route('champions.index');
    }

    public function delete(Champion $champion): View {
        return view('champions.delete', compact('champion'));
    }

    public function destroy(Champion $champion): RedirectResponse {
        $champion->delete();
        return redirect()->route('champions.index');
    }

    public function show(Champion $champion): View {
        return view('champions.show', compact('champion'));
    }
}
