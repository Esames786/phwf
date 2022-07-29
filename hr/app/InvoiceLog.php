<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InvoiceLog extends Model
{
    protected $table = 'invoice_log';

    protected $guarded = [ 'id' , 'created_at', 'updated_at' ];
    protected $fillable = [ 'invoice_id', 'date' , 'title' ,'amount' ];

    public function invoice()
    {
        return $this->belongsTo(Invoice::class,'invoice_id','id');
    }
}
