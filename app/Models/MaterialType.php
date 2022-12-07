<?php

namespace App\Models;

use App\Models\MaterialTransaction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MaterialType extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function transactions()
    {
        return $this->hasMany(MaterialTransaction::class);
    }
}
