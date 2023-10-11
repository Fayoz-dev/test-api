<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Warehouses extends Model
{
    use HasFactory;
    
    protected $fillable = ['price', 'attribute_id', 'remainder'];

    public function attributes():HasMany
    {
        return $this->hasMany(Material::class);
    }


}
