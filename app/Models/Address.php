<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Address extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $visible = [
        'id',
        'first_line',
        'second_line',
        'city',
        'region',
        'postcode',
        'contact_id',
        'address_type_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'first_line',
        'second_line',
        'city',
        'region',
        'postcode',
        'contact_id',
        'address_type_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    /**
     * Add Contact Relationship to model.
     */
    public function contact () 
    {
        return $this->belongsToMany(Contact::class);
    }

    /**
     * Add Address Type relationship to model.
     */
    public function address_type () 
    {
        return $this->hasOne(AddressType::class);
    }
}
