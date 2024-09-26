<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Mode_reglement extends Model
{
    use HasFactory;
    protected $fillable = ['mode_reglement'];
     
    public function detail_commande():HasMany{
        return $this->hasMany(detail_commande::class);
    }

}
