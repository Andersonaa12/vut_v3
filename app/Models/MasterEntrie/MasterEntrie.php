<?php

use Illuminate\Database\Eloquent\SoftDeletes;

class MasterEntrie extends BaseModel
{
  	protected $table='master_entries';
    public $timestamps = true;
  	protected $primaryKey = 'id';

    use SoftDeletes;

}
