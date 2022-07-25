<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customer';

    protected $guarded = ['id' , 'created_at', 'updated_at'];
//    protected $fillable = ['name', 'email', 'contact', 'address',''];

    public function invoice()
    {
        return $this->hasMany(Invoice::class, 'customer_id', 'id');
    }


    public function filess()
    {
        return $this->hasMany(files::class, 'customer_id', 'id');
    }

}
