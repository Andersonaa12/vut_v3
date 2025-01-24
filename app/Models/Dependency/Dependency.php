<?php

use Illuminate\Database\Eloquent\SoftDeletes;

class Dependency extends BaseModel
{
  protected $table = 'dependencies';
  public $timestamps = true;
  protected $primaryKey = 'id';

  use SoftDeletes;
  protected $fillable = [
    'brand_id',
    'name',
    'description',
    'created_by',
    'updated_by'
  ];

  public function Brand()
  {
    return $this->belongsTo(Brand::class);
  }

  public function Series()
  {
    return $this->belongsToMany(Series::class, 'dependency_series');
  }
}
