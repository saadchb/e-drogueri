<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class detail_commande extends Model
{
    use HasFactory;
    protected $guraded = ['id','created_at','updated_at'];

    public function commande():BelongsTo{
        return $this->belongsTo(Commande::class);
    }
    public function produit():BelongsTo{
        return $this->belongsTo(Produit::class);
    }
    
}
