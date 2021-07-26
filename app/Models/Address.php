<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $visible = [
        'id',
        'first_line',
        'second_line',
        'city',
        'region',
        'postcode',
        'contact_id',
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
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function contact() {
        return $this->belongsTo();
    }
}
