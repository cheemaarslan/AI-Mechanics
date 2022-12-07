<?php

namespace App\Models;

use Carbon\Carbon;
use App\Models\Customer;
use App\Models\Mechanic;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Service extends Model
{
    use HasFactory;
    use HasFactory;
    protected $guarded = ['id'];

    public function getOrderDateAttribute()
    {
        return Carbon::parse($this->attributes['order_date'])->format('d-m-Y');
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }
    public function mechanic()
    {
        return $this->belongsTo(Mechanic::class, 'mechanic_id');
    }
}
