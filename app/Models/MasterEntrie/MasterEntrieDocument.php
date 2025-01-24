<?php

use Illuminate\Database\Eloquent\SoftDeletes;

class MasterEntriesDocument extends BaseModel
{
  protected $table='master_entries_documents';
  public $timestamps = true;
  protected $primaryKey = 'id';

  use SoftDeletes;
  protected $fillable = [
    'brand_id',
    'name',
    'description',
    'path',
    'type',
    'size',
    'active',
    'created_by',
    'updated_by'
  ];
  public function Brand()
  {
      return $this->belongsTo(Brand::class);
  }

  public function MasterEntries()
  {
      return $this->belongsToMany(MasterEntry::class, 'document_master_entries');
  }
}
