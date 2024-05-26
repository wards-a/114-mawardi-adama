<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttachmentFile extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'filename',
        'filepath',
        'filesize',
        'content_type'
    ];
}
