<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddressContact extends Model
{
    use HasFactory;

    protected $table = "address_contact";

    protected $visible = [
        'id',
        'address_id',
        'contact_id',
        'created_at',
        'updated_at',

    ];

    protected $fillable = [

        'address_id',
        'contact_id',
        'created_at',
        'updated_at',
    ];

    public function contact ()
    {
        return $this->belongsTo(Contact::class);
    }

    public function address ()
    {
        return $this->belongsTo(Address::class);
    }
}
