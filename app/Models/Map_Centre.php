<?php

namespace App\Models;

use App\Models\Centre;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Map_Centre extends Model
{
    use HasFactory;

    public function centre():BelongsTo{
        return $this->belongsTo(Centre::class);
    }
}
