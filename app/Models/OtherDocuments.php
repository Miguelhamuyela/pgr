<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OtherDocuments extends Model
{
    use HasFactory;
    use HasFactory, SoftDeletes;
    protected $table = 'other_documents';

    public $fillable = ['title', 'file'];

    protected $dates = ['deleted_at'];
}
