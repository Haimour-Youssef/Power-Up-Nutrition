<?php

namespace App\Http\Controllers;

use App\Models\Recette;
use Illuminate\View\View;
use App\Models\Instruction;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class InstructionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $this->authorize('view-any', Instruction::class);

        $search = $request->get('search', '');

        $instructions = Instruction::search($search)
            ->latest()
            ->paginate(5)
            ->withQueryString();

        return view(
            'app.instructions.index',
            compact('instructions', 'search')
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request): View
    {
        $this->authorize('create', Instruction::class);

        $recettes = Recette::pluck('title', 'id');

        return view('app.instructions.create', compact('recettes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $this->authorize('create', Instruction::class);

        $validated = $request->validate([
            'name' => ['required', 'max:255', 'string'],
            'order' => ['required', 'numeric'],
            'recette_id' => ['required', 'exists:recettes,id'],
        ]);

        $instruction = Instruction::create($validated);

        return redirect()
            ->route('instructions.edit', $instruction)
            ->withSuccess(__('crud.common.created'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, Instruction $instruction): View
    {
        $this->authorize('view', $instruction);

        return view('app.instructions.show', compact('instruction'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, Instruction $instruction): View
    {
        $this->authorize('update', $instruction);

        $recettes = Recette::pluck('title', 'id');

        return view(
            'app.instructions.edit',
            compact('instruction', 'recettes')
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(
        Request $request,
        Instruction $instruction
    ): RedirectResponse {
        $this->authorize('update', $instruction);

        $validated = $request->validate([
            'name' => ['required', 'max:255', 'string'],
            'order' => ['required', 'numeric'],
            'recette_id' => ['required', 'exists:recettes,id'],
        ]);

        $instruction->update($validated);

        return redirect()
            ->route('instructions.edit', $instruction)
            ->withSuccess(__('crud.common.saved'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(
        Request $request,
        Instruction $instruction
    ): RedirectResponse {
        $this->authorize('delete', $instruction);

        $instruction->delete();

        return redirect()
            ->route('instructions.index')
            ->withSuccess(__('crud.common.removed'));
    }
}
