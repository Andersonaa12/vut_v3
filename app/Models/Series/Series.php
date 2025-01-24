<?php

use Illuminate\Database\Eloquent\SoftDeletes;

class Series extends BaseModel
{
  protected $table='series';
  public $timestamps = true;
  protected $primaryKey = 'id';

  use SoftDeletes;
  protected $fillable = [
    'brand_id',
    'unique_code',
    'name',
    'description',
    'created_by',
    'updated_by'
  ];

  public function Brand()
  {
      return $this->belongsTo(Brand::class);
  }

  public function Dependencies()
  {
      return $this->belongsToMany(Dependency::class, 'dependency_series');
  }

  public function Subseries()
  {
      return $this->hasMany(Subseries::class);
  }
}
