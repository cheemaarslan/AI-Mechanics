<?php

namespace App\Models;

use Carbon\Carbon;
use App\Models\PurchaseDetail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Purchase extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function getPurchaseDateAttribute()
    {
        return Carbon::parse($this->attributes['purchase_date'])->format('d-m-Y');
    }

    /**
     * Get all of the comments for the Purchase
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function details()
    {
        return $this->hasMany(PurchaseDetail::class);
    }

    public function supplier()
    {
        return $this->belongsTo(Supplier::class, 'supplier_id');
    }
    public function material()
    {
        return $this->belongsTo(Material::class, 'material_id');
    }
    public function customer()
    {
        return $this->belongsTo(Customer::class, 'material_id');
    }
}
