<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Counselor extends Model
{
    protected $table = 'counselors';
    protected $fillable = ['name','specialty','status','photo'];
}
