<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FileUpload extends Model
{
    protected $table = 'file_upload';
    protected $fillable = [
        'inventory_id',
        'image'
    ];
}
