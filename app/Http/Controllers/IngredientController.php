<?php

namespace App\Http\Controllers;

use App\Models\Recette;
use Illuminate\View\View;
use App\Models\Ingredient;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class IngredientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $this->authorize('view-any', Ingredient::class);

        $search = $request->get('search', '');

        $ingredients = Ingredient::search($search)
            ->latest()
            ->paginate(5)
            ->withQueryString();

        return view('app.ingredients.index', compact('ingredients', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request): View
    {
        $this->authorize('create', Ingredient::class);

        $recettes = Recette::pluck('title', 'id');

        return view('app.ingredients.create', compact('recettes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $this->authorize('create', Ingredient::class);

        $validated = $request->validate([
            'name' => ['required', 'max:255', 'string'],
            'order' => ['required', 'numeric'],
            'recette_id' => ['required', 'exists:recettes,id'],
        ]);

        $ingredient = Ingredient::create($validated);

        return redirect()
            ->route('ingredients.edit', $ingredient)
            ->withSuccess(__('crud.common.created'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, Ingredient $ingredient): View
    {
        $this->authorize('view', $ingredient);

        return view('app.ingredients.show', compact('ingredient'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, Ingredient $ingredient): View
    {
        $this->authorize('update', $ingredient);

        $recettes = Recette::pluck('title', 'id');

        return view('app.ingredients.edit', compact('ingredient', 'recettes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(
        Request $request,
        Ingredient $ingredient
    ): RedirectResponse {
        $this->authorize('update', $ingredient);

        $validated = $request->validate([
            'name' => ['required', 'max:255', 'string'],
            'order' => ['required', 'numeric'],
            'recette_id' => ['required', 'exists:recettes,id'],
        ]);

        $ingredient->update($validated);

        return redirect()
            ->route('ingredients.edit', $ingredient)
            ->withSuccess(__('crud.common.saved'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(
        Request $request,
        Ingredient $ingredient
    ): RedirectResponse {
        $this->authorize('delete', $ingredient);

        $ingredient->delete();

        return redirect()
            ->route('ingredients.index')
            ->withSuccess(__('crud.common.removed'));
    }
}
