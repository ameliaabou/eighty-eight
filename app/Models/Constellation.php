<?php
// sail artisan make:model Constellation

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Constellation extends Model
{
    protected $fillable = [
        'name',
        'image_name',
        'alias',
        'details',
        'myth',
        'hemisphere',
        'season'
    ];
}
