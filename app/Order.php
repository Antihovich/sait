<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
		'name',
		'body',
		'email',
		'phone',
		'address',
		'type',
		'fio',
		'comment',
		'user_id',
		'status',
];	
}
