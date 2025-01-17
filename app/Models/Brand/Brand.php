<?php

use Illuminate\Database\Eloquent\SoftDeletes;

class Brand extends BaseModel
{
  	protected $table='brands';
    public $timestamps = true;
  	protected $primaryKey = 'id';

    use SoftDeletes;

}
