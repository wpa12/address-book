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

    public function contact() 
    {
        return $this->belongsTo(Contact::class);
    }
}
