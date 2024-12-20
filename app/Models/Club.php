<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;

class Club extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name', 'president', 'date_found', 'description', 'image'
    ];

    protected $dates = ['date_found'];

    public function getDateFoundAttribute($value)
    {
        return Carbon::parse($value)->format('d-m-Y');
    }
}
