<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    protected $table = 'expense';

    protected $guarded = [ 'id' , 'created_at', 'updated_at' ];
    protected $fillable = [ 'user_id', 'title', 'amount' ];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
}
