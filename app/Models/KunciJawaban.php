<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KunciJawaban extends Model
{
    use HasFactory;
    protected $table='kuncijawabans';
    protected $fillable=[
        'title',
        'summernote',
        'tayang',
        'password',
        'slug',
    ];
    protected $guarded = [];
    protected $dates = ['created_at'];
}
