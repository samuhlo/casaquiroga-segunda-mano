<?php

declare(strict_types=1);

namespace App\Models;

use Database\Factories\NotesFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

#[Fillable(['descripcion', 'user_id', 'second_hand_machine_id'])]
class Notes extends Model
{
    /** @use HasFactory<NotesFactory> */
    use HasFactory;

    /**
     * @return BelongsTo<User, $this>
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @return BelongsTo<SecondHandMachine, $this>
     */
    public function secondHandMachine(): BelongsTo
    {
        return $this->belongsTo(SecondHandMachine::class);
    }
}
