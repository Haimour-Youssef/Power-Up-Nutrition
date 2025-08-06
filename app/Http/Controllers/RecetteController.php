<?php

namespace App\Http\Controllers;

use App\Models\Recette;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class RecetteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        // $this->authorize('view-any', Recette::class);

        $search = $request->get('search', '');
        if ($search !== null && $search !== '') {
            $recettes = Recette::search($search)
                ->latest()
                ->paginate(5)
                ->withQueryString();
        } else {
            $recettes = Recette::query()
                ->latest()
                ->paginate(5)
                ->withQueryString();
        }


        // $recettes = Recette::search($search)
        //     ->latest()
        //     ->paginate(5)
        //     ->withQueryString();

        return view('app.recettes.index', compact('recettes', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request): View
    {
        // $this->authorize('create', Recette::class);

        return view('app.recettes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        // $this->authorize('create', Recette::class);

        $validated = $request->validate([
            'title' => ['required', 'max:255', 'string'],
            'description' => ['required', 'max:255', 'string'],
            'Preparation' => ['required', 'numeric'],
            'Portions' => ['required', 'numeric'],
            'Calories' => ['required', 'numeric'],
            'image' => ['nullable', 'image'],
            'type' => ['required', 'string', 'in:petit-dejeuner,dejeuner,diner,snack,boisson'],
        
        ]);
        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('recettes','public');
        }

        $recette = Recette::create($validated);

        return redirect()
            ->route('recettes.edit', $recette)
            ->withSuccess(__('crud.common.created'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, Recette $recette): View
    {
        // $this->authorize('view', $recette);

        return view('app.recettes.show', compact('recette'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, Recette $recette): View
    {
        // $this->authorize('update', $recette);

        return view('app.recettes.edit', compact('recette'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Recette $recette): RedirectResponse
    {
        // $this->authorize('update', $recette);

        $validated = $request->validate([
            'title' => ['required', 'max:255', 'string'],
            'description' => ['required', 'max:255', 'string'],
            'Preparation' => ['required', 'numeric'],
            'Portions' => ['required', 'numeric'],
            'Calories' => ['required', 'numeric'],
            'image' => ['nullable', 'image'],
            'type' => ['required', 'string', 'in:petit-dejeuner,dejeuner,diner,snack,boisson'],
        ]);
        if ($request->hasFile('image')) {
            if ($recette->image) {
                Storage::delete($recette->image);
            }

            $validated['image'] = $request->file('image')->store('recettes','public');
        }

        $recette->update($validated);

        return redirect()
            ->route('recettes.edit', $recette)
            ->withSuccess(__('crud.common.saved'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(
        Request $request,
        Recette $recette
    ): RedirectResponse {
        // $this->authorize('delete', $recette);

        if ($recette->image) {
            Storage::delete($recette->image);
        }

        $recette->delete();

        return redirect()
            ->route('recettes.index')
            ->withSuccess(__('crud.common.removed'));
    }
}
