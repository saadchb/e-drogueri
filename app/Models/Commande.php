<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Commande extends Model
{
    use HasFactory;
    protected $guarded =['id','created_at','updated_at'];

    public function etat():BelongsTo{
        return $this->belongsTo(Etat::class);
    }
    public function user():BelongsTo{
        return $this->belongsTo(user::class);
    }
    public function Mode_reglement():BelongsTo{
        return $this->belongsTo(Mode_reglement::class);
    }
}
