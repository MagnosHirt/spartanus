<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aniversariante extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'aniversario',
    ];

    protected $casts = [
        'aniversario' => 'date',
    ];

    protected function idade(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->aniversario->diffInYears(now()),
        );
    }
}
