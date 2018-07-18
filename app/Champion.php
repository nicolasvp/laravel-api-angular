<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Champion extends Model
{
    protected $table = 'champions';

    protected $fillable = ['name', 'type_id', 'line_id', 'image'];

    public function line(){
    	return $this->belongsTo('App\Line');
    }

    public function type(){
    	return $this->belongsTo('App\Type');
    }
}
