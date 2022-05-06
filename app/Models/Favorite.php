<?php
// sail artisan make:model Favorite

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    protected $table = 'favorites';
    protected $fillable = [
        'user_id',
        'constellation_id',
    ];

    public function constellations(){
        return $this->belongsTo(Constellation::class, 'constellation_id', 'id');
    }
}
