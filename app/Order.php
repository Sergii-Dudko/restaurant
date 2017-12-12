<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Table;


class Order extends Model
{
    protected $table = 'orders';

    public function foods()
    {
        return $this->belongsToMany('App\Food');
    }
    public function table()
    {
        return $this->belongsTo('App\Table');
    }
}
