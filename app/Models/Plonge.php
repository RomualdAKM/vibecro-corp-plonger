<?php

namespace App\Models;

use App\Models\User;
use App\Models\Centre;
use App\Models\Moniteur;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Plonge extends Model
{
    use HasFactory;

    public function moniteur():BelongsTo{
        return $this->belongsTo(Moniteur::class);
    }
    public function centre():BelongsTo{
        return $this->belongsTo(Centre::class);
    }

    public function users():BelongsToMany
{
    return $this->belongsToMany(User::class);
}
}
