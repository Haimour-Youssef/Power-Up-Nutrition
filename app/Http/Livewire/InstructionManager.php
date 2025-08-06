<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Instruction;

class InstructionManager extends Component
{
    public $recetteId;
    public $instructions;
    public $name = '';
    public $order = 1;
    public $instruction_id = null;
    public $isEditing = false;

    protected $rules = [
        'name' => 'required|string|max:255',
        'order' => 'required|integer|min:1',
    ];

    public function mount($recetteId)
    {
        $this->recetteId = $recetteId;
        $this->loadInstructions();
    }

    public function loadInstructions()
    {
        $this->instructions = Instruction::where('recette_id', $this->recetteId)->orderBy('order')->get();
    }

    public function resetForm()
    {
        $this->name = '';
        $this->order = 1;
        $this->instruction_id = null;
        $this->isEditing = false;
    }

    public function save()
    {
        $this->validate();
        Instruction::create([
            'recette_id' => $this->recetteId,
            'name' => $this->name,
            'order' => $this->order,
        ]);
        $this->resetForm();
        $this->loadInstructions();
    }

    public function edit($id)
    {
        $instruction = Instruction::findOrFail($id);
        $this->instruction_id = $instruction->id;
        $this->name = $instruction->name;
        $this->order = $instruction->order;
        $this->isEditing = true;
    }

    public function update()
    {
        $this->validate();
        $instruction = Instruction::findOrFail($this->instruction_id);
        $instruction->update([
            'name' => $this->name,
            'order' => $this->order,
        ]);
        $this->resetForm();
        $this->loadInstructions();
    }

    public function delete($id)
    {
        Instruction::findOrFail($id)->delete();
        $this->loadInstructions();
    }

    public function render()
    {
        return view('livewire.instruction-manager');
    }
}
