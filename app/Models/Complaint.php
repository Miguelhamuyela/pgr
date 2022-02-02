<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Complaint extends Model
{
    use HasFactory;
    use HasFactory, SoftDeletes;

    protected $table = 'complaints';

    public $fillable = ['name', 'email', 'phone', 'complaintData', 'actsCorruption', 'datesPeriods', 'identificationSuspects','knowledgeFacts','amountsInvolved','documentsEvidenc','attachment'];
    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];
}
