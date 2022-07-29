<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $table = 'package';

    protected $guarded = ['id' , 'created_at', 'updated_at'];
    protected $fillable = ['title', 'amount'];
}
