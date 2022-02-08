<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AttorneyGeneral extends Model
{
    use HasFactory;

    use HasFactory, SoftDeletes;
    protected $table = 'attorney_general';

    public $fillable = ['photo', 'description','name'];
    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];
}
