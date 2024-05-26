<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quotation extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'reference',
        'issue_date',
        'notes',
        'signed_by',
        'created_by'
    ];
}
