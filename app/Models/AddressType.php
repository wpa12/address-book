<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AddressType extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $visible = [
        'id',
        'name',
    ];

    protected $fillable = [
        'name',
    ];

    public function address ()
    {
        return $this->belongsTo(Address::class);
    }
}
