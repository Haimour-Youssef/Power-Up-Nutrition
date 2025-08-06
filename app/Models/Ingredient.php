<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ingredient extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['name', 'order', 'recette_id'];

    protected $searchableFields = ['*'];

    public function recette()
    {
        return $this->belongsTo(Recette::class);
    }
}
