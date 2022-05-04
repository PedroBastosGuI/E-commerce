<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    public function ingredients()
    {
        return $this->belongsToMany('App\Models\Ingredient')
            ->using('App\Models\IngredientRecipe')
            ->withPivot(['quantity']);
    }
}
