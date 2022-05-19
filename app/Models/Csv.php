<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Csv extends Model
{
    use HasFactory;

    protected $fillable = [
        'cedula',
        'variable',
        'breakdown',
        'breakdown_category',
        'year',
        'rd_value',
        'units',
        'footnotes'
    ];


    public $timestamps = false;
}
