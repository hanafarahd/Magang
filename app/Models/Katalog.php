<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Katalog extends Model
{
    use HasFactory;

    protected $table='katalogs';
    protected $fillable=[
        'title',
        'image',
        'summernote',
        'category',
        'tayang',
        'slug',
    ];
    protected $guarded = [];
    protected $dates = ['created_at'];
    
}
