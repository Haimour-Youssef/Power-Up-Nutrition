<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Ingredient;
use Illuminate\Support\Collection;

class IngredientManager extends Component
{
    public $recetteId;
    public $ingredients;
    public $name = '';
    public $order = 1;
    public $ingredient_id = null;
    public $isEditing = false;

    protected $rules = [
        'name' => 'required|string|max:255',
        'order' => 'required|integer|min:1',
    ];

    public function mount($recetteId)
    {
        $this->recetteId = $recetteId;
        $this->loadIngredients();
    }

    public function loadIngredients()
    {
        $this->ingredients = Ingredient::where('recette_id', $this->recetteId)->orderBy('order')->get();
    }

    public function resetForm()
    {
        $this->name = '';
        $this->order = 1;
        $this->ingredient_id = null;
        $this->isEditing = false;
    }

    public function save()
    {
        $this->validate();
        Ingredient::create([
            'recette_id' => $this->recetteId,
            'name' => $this->name,
            'order' => $this->order,
        ]);
        $this->resetForm();
        $this->loadIngredients();
    }

    public function edit($id)
    {
        $ingredient = Ingredient::findOrFail($id);
        $this->ingredient_id = $ingredient->id;
        $this->name = $ingredient->name;
        $this->order = $ingredient->order;
        $this->isEditing = true;
    }

    public function update()
    {
        $this->validate();
        $ingredient = Ingredient::findOrFail($this->ingredient_id);
        $ingredient->update([
            'name' => $this->name,
            'order' => $this->order,
        ]);
        $this->resetForm();
        $this->loadIngredients();
    }

    public function delete($id)
    {
        Ingredient::findOrFail($id)->delete();
        $this->loadIngredients();
    }

    public function render()
    {
        return view('livewire.ingredient-manager');
    }
}
