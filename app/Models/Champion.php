<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Champion extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'role',
        'lane', // Línia o posició del campió (Mid, ADC, Jungle, Supp, Top)
        'origin', // Origen del campió
        'release_date', // Data de llançament del campió
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'release_date' => 'date', // Cast a date per al camp release_date
    ];
}
