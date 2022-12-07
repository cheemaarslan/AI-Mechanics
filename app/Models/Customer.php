<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    /**
     * Get all of the services for the Customer
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function service()
    {
        return $this->hasMany(Service::class,'service_id');
    }
    public function payment()
    {
        return $this->hasMany(Payment::class);
    }
    public function feedback()
    {
        return $this->hasMany(Feedback::class);
    }
}
