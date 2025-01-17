<?php

use Illuminate\Database\Eloquent\SoftDeletes;

class MasterEntrie extends BaseModel
{
  	protected $table='master_entries_documents';
    public $timestamps = true;
  	protected $primaryKey = 'id';

    use SoftDeletes;

}
