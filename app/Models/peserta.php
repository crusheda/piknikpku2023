<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class peserta extends Model
{
    protected $table = 'peserta';
    public $timestamps = true;
    use SoftDeletes;
}
