<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Direction extends Model
{
    use HasFactory;

    use HasFactory, SoftDeletes;

    protected $table = 'organs';
    public $fillable = ['organ', 'province', 'photo','office','name'];
    protected $dates = ['deleted_at'];
}
