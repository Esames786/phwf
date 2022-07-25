<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class files extends Model
{
    protected $table = 'files';

    public function user()
    {
        return $this->belongsTo(Customer::class,'customer_id','id');
    }
    public function upladfiletype(){

        return $this->belongsTo(upladfiletype::class,'filetypeId','id');


    }

}
