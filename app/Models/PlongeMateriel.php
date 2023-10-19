<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PlongeMateriel extends Model
{
    use HasFactory;

    protected $table = 'plonges_materiels';    

    public function materiel():BelongsTo{
        return $this->belongsTo(Materiel::class);
    }
}
