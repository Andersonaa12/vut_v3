<?php

use Illuminate\Database\Eloquent\SoftDeletes;

class Subseries extends BaseModel
{
    protected $table='subseries';
    public $timestamps = true;
    protected $primaryKey = 'id';

    use SoftDeletes;

    protected $fillable = [
        'brand_id',
        'subserie_support_id',
        'unique_code',
        'description',
        'management_file_time',
        'central_file_time',
        'subserie_final_disposition_id',
        'observations',
        'active',
        'created_by',
        'updated_by'
    ];

    public function Brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function SubserieSupport()
    {
        return $this->belongsTo(SubserieSupport::class);
    }

    public function SubserieFinalDisposition()
    {
        return $this->belongsTo(SubserieFinalDisposition::class);
    }

    public function Series()
    {
        return $this->belongsTo(Series::class);
    }
}
