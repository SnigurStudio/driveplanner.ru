<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Code extends Model
{
    protected $table = 'activate_codes';
    protected $fillable = ['code'];
}
