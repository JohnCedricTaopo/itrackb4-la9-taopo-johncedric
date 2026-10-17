<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Character;

class GenshinImpactController extends Controller
{

   public function index(Request $request)
{
    $characters = Character::all();

    $element = $request->query('element', 'all');
    $rarity = $request->query('rarity', 'all');

    if ($element !== 'all' && $element !== '') {
        $characters = $characters->filter(
            fn ($character): bool =>
                strcasecmp($character->element, $element) === 0
        );
    }

    if ($rarity !== 'all' && $rarity !== '') {
        $characters = $characters->filter(
            fn ($character): bool =>
                (string) $character->rarity === (string) $rarity
        );
    }

    return view('characters.index', [
        'characters' => $characters,
        'element' => $element,
        'rarity' => $rarity,
    ]);
}


    public function create()
    {
        return view('characters.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:100',
            'element' => 'required|in:Anemo,Cryo,Electro,Pyro,Dendro,Hydro',
            'weapon' => 'required|in:Sword,Claymore,Polearm,Catalyst,Bow',
            'rarity' => 'required|numeric|in:4,5',
        ]);

        $character = new Character();
        $character->name = $validated['name'];
        $character->element = $validated['element'];
        $character->weapon = $validated['weapon'];
        $character->rarity = (int) $validated['rarity'];
        $character->save();

        return redirect()
            ->route('characters.index')
            ->with('success', 'Character added successfully.');
    }

    public function show($id)
    {
        $character = Character::findOrFail($id);

        return view('characters.show', compact('character'));
    }

    public function edit(int $id)
    {
        // Not implemented yet.
    }

    public function update(Request $request, int $id)
    {
        // Not implemented yet.
    }

    public function destroy(int $id)
    {
        // Not implemented yet.
    }

    public function featured()
    {
        $character = Character::findOrFail(4);

        return view('characters.featured', compact('character'));
    }

}