<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Recette;

class RecetteList extends Component
{
    use WithPagination;

    public $search = '';
    public $category = 'all';
    public $perPage = 10;

    protected $updatesQueryString = ['search', 'category', 'page'];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function updatingCategory()
    {
        $this->resetPage();
    }

    public function setCategory($cat)
    {
        $this->category = $cat;
    }

    public function render()
    {
        $query = Recette::query();
        if ($this->search) {
            $query->where(function($q) {
                $q->where('title', 'like', '%'.$this->search.'%')
                  ->orWhere('description', 'like', '%'.$this->search.'%');
            });
        }
        if ($this->category && $this->category !== 'all') {
            $query->where('type', $this->category);
        }
        $recettes = $query->orderBy('created_at', 'desc')->paginate($this->perPage);
        return view('livewire.recette-list', [
            'recettes' => $recettes
        ]);
    }
}
