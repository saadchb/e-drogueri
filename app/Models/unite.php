<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class unite extends Model
{
    use HasFactory;
    protected  $filable = ['unite'];

    public function produit():HasMany{
        return $this->hasMany(Produit::class);
    }
}
