<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Recette extends Model
{
    use HasFactory;
    use Searchable;
    use SoftDeletes;

    protected $fillable = [
        'title',
        'description',
        'Preparation',
        'Portions',
        'Calories',
        'image',
        'type',
    ];

    protected $searchableFields = ['*'];

    public function ingredients()
    {
        return $this->hasMany(Ingredient::class);
    }

    public function instructions()
    {
        return $this->hasMany(Instruction::class);
    }
}
