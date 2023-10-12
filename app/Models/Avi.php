<?php

namespace App\Models;

use App\Models\Moniteur;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Avi extends Model
{
    use HasFactory;

    public function moniteur():BelongsTo{
        return $this->belongsTo(Moniteur::class);
    }
}
