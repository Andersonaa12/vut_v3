<?php

use Illuminate\Database\Eloquent\SoftDeletes;

class MasterEntrieStatus extends BaseModel
{
  public const ID_PROCESO = 1;
  public const ID_POR_APROBAR = 2;
  public const ID_POR_FIRMAR = 3;
  public const ID_RESPONDIDO = 4;
  public const ID_SALIDA = 5;
  public const ID_FINALIZADO = 6;
  protected $table='master_entrie_status';
  public $timestamps = true;
  protected $primaryKey = 'id';

  use SoftDeletes;
  protected $fillable = [
    'brand_id',
    'name',
    'description'
  ];
  public function Brand()
  {
      return $this->belongsTo(Brand::class);
  }

  public function MasterEntries()
  {
      return $this->hasMany(MasterEntry::class);
  }
}
