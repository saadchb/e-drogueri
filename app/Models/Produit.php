<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use SebastianBergmann\CodeCoverage\Report\Xml\Unit;

class Produit extends Model
{
    use HasFactory;
    protected $guarded =['id','created_at','updated_at'];
    public function unit():BelongsTo{
        return $this->belongsTo(Unit::class);
    }
    public function marque():BelongsTo{
        return $this->belongsTo(marque::class);
    }
    public function sousFamille()
    {
        return $this->belongsTo(SousFamille::class, 'sous_famille_id');
    }
}
