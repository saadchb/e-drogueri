<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SousFamille extends Model
{
    use HasFactory;
    protected $fillable = ['libelle','image','famille_id'];

    public function Famille():BelongsTo{
        return $this->belongsTo(Famille::class);
    }

    
    public function produits()
    {
        return $this->hasMany(Produit::class, 'sous_famille_id');
    }
    
}
