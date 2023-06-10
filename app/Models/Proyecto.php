<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'docente_id',
        'url_github',
        'metadatos'
    ];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
