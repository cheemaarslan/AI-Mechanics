<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mechanic extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    /**
     * Get all of the customer for the Mechanic
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function customer()
    {
        return $this->hasMany(Customer::class, 'customer_id');
    }
    public function supplier()
    {
        return $this->hasMany(Supplier::class, 'supplier_id');
    }

}
