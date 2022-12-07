<?php

namespace App\Models;

use App\Models\MaterialType;
use App\Models\MaterialTransaction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Material extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    /**
     * Get all of the types for the Material
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function types()
    {
        return $this->hasMany(MaterialType::class);
    }

    /**
     * Get all of the transactions for the Material
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function transactions()
    {
        return $this->hasMany(MaterialTransaction::class);
    }
}
