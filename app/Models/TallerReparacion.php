<?php

declare(strict_types=1);

namespace App\Models;

use Database\Factories\TallerReparacionFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TallerReparacion extends Model
{
    /** @use HasFactory<TallerReparacionFactory> */
    use HasFactory;

    protected $fillable = [
        'nombre',
    ];

    public function secondHandMachines(): HasMany
    {
        return $this->hasMany(SecondHandMachine::class);
    }
}
