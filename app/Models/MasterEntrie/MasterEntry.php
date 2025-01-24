<?php

use Illuminate\Database\Eloquent\SoftDeletes;

class MasterEntry extends BaseModel
{
  protected $table='master_entries';
  public $timestamps = true;
  protected $primaryKey = 'id';
      
  use SoftDeletes;
  protected $fillable = [
    'brand_id',
    'master_entrie_type_based_id',
    'master_entrie_status_id',
    'master_type_outputs_id',
    'serie_id',
    'subserie_id',
    'document_types_id',
    'active',
    'code_unique',
    'response_date',
    'check_date',
    'approve_date',
    'description',
    'leaf',
    'annex',
    'view',
    'signed',
    'authorizes',
    'notification_date',
    'created_by',
    'updated_by'
  ];
  public function Brand()
  {
      return $this->belongsTo(Brand::class);
  }

  public function MasterEntrieTypeBased()
  {
      return $this->belongsTo(MasterEntrieTypeBased::class);
  }

  public function MastMerEntrieStatus()
  {
      return $this->belongsTo(MasterEntrieStatus::class);
  }

  public function MasterTypeOutput()
  {
      return $this->belongsTo(MasterTypeOutput::class);
  }

  public function Serie()
  {
      return $this->belongsTo(Series::class);
  }

  public function Subserie()
  {
      return $this->belongsTo(Subseries::class);
  }

  public function DocumentType()
  {
      return $this->belongsTo(DocumentType::class);
  }

  public function Details()
  {
      return $this->hasMany(MasterEntrieDetail::class);
  }

  public function AssignedUsers()
  {
      return $this->hasMany(MasterEntrieAssignedUser::class);
  }

  public function Documents()
  {
      return $this->belongsToMany(MasterEntriesDocument::class, 'document_master_entries');
  }
}