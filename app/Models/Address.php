<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $primaryKey="id";
    protected $keyType="int";
    protected $table="addresses";
    public $incrementing=true;
    public $timestamps=true;

    protected $fillable = ['street', 'city', 'province', 'country', 'postal_code'];
   
    use HasFactory;
}
