<?php
// sail artisan make:model StarChart

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StarChart extends Model
{
    protected $fillable = [
        'month',
        'image_name',
        'download_bw',
        'download_c',
        'details'
    ];
}
