<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Alokairua extends Model
{
    /** @use HasFactory<\Database\Factories\AlokairuaFactory> */
    use HasFactory;
    protected $fillable = [
        'alokatzaile_izena',
        'etxea_id'
    ];
    public function etxea(): BelongsTo
    {
        return $this->belongsTo(Etxea::class);
    }
}
