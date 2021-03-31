<?php

namespace App\Models\Hotel;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GalerieHotel extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image_content_type',
        'image',
        'description'
    ]; 
}
