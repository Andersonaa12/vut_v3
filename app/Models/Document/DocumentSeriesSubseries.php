<?php

use Illuminate\Database\Eloquent\SoftDeletes;

class DocumentSeriesSubseries extends BaseModel
{
  	protected $table='document_series_subseries';
    public $timestamps = true;
  	protected $primaryKey = 'id';

    use SoftDeletes;
    protected $fillable = [
        'brand_id',
        'document_type_id',
        'series_id',
        'subseries_id'
    ];

    public function Brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function DocumentType()
    {
        return $this->belongsTo(DocumentType::class);
    }

    public function Series()
    {
        return $this->belongsTo(Series::class);
    }

    public function Subseries()
    {
        return $this->belongsTo(Subseries::class);
    }
}
