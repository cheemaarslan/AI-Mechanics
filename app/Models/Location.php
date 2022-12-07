<?php

namespace App\Models;

use App\Models\Mechanic;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Location extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    /**
     * Get the user associated with the Location
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function customer()
    {
        return $this->hasOne(Customer::class,  'customer_id');
    }
    public function mechanic()
    {
        return $this->hasOne(Mechanic::class,  'mechanic_id');
    }
}
