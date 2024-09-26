<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Famille extends Model
{
    use HasFactory;
    protected $fillable = ['libelle','image'];

    public function Sous_famille():HasMany{
        return $this->hasMany(SousFamille::class);
    }
}
