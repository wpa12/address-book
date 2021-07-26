<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $visible = [
        'id', 
        'salutation',
        'first_name',
        'middle_name',
        'last_name', 
        'dob',
        'email',
        'description',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'salutation',
        'first_name',
        'middle_name',
        'last_name', 
        'dob',
        'email',
        'description',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function address ()
    {
        return $this->hasMany(Address::class);
    } 
}
