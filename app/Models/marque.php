<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class marque extends Model
{
    use HasFactory;
    protected $fillable = ['marque','active','image'];
    public function Produit():HasMany{
        return $this->hasMany(Produit::class);
    }
}
