<?php

use Illuminate\Database\Eloquent\SoftDeletes;

class DependencySeries extends BaseModel
{
  	protected $table='dependency_series';
    public $timestamps = true;
  	protected $primaryKey = 'id';

    use SoftDeletes;
    protected $fillable = [
        'brand_id',
        'dependency_id',
        'series_id'
    ];

    public function dependency()
    {
        return $this->belongsTo(Dependency::class);
    }

    public function Series()
    {
        return $this->belongsTo(Series::class);
    }
}
