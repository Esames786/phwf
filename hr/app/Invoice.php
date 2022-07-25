<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $table = 'invoice';

    protected $guarded = [ 'id' , 'created_at', 'updated_at' ];
    protected $fillable = [ 'customer_id', 'package_id' , 'amount','date','description' ];

    public function customer()
    {
        return $this->belongsTo(Customer::class,'customer_id','id');
    }


    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function package()
    {
        return $this->belongsTo(Package::class,'package_id','id');
    }

    public function log()
    {
        return $this->hasMany(InvoiceLog::class,'invoice_id','id');
    }
}
