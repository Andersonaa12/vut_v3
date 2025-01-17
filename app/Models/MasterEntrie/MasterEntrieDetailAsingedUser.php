<?php

use Illuminate\Database\Eloquent\SoftDeletes;

class MasterEntrie extends BaseModel
{
  	protected $table='master_entrie_assigned_users';
    public $timestamps = true;
  	protected $primaryKey = 'id';

    use SoftDeletes;

}
