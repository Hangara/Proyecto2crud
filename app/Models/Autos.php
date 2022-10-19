<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autos extends Model
{
    use HasFactory;
    protected $fillable = ['nombre','fecha','resguardador','modelo','telefono'];
    //protected $guarded =['id'];
    public $timestamps =false;
}
