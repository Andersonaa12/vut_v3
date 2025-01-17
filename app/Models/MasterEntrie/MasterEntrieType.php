<?php

use Illuminate\Database\Eloquent\SoftDeletes;

class MasterEntrie extends BaseModel
{
    public const ID_INTERNO = 1;
    public const ID_EXTERNO = 2;
    public const ID_ANONIMO = 3;

  	protected $table='master_entrie_types';
    public $timestamps = true;
  	protected $primaryKey = 'id';

    use SoftDeletes;

}
