<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class PlongeUser extends Model
{
    use HasFactory;

    protected $table = 'plonge_users';

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }

    public function plonges(): BelongsToMany
    {
        return $this->belongsToMany(Plonge::class);
    }
}
