<?php

use Illuminate\Database\Eloquent\SoftDeletes;

class SubserieFinalDisposition extends BaseModel
{
    protected $table='subserie_final_dispositions';
    public $timestamps = true;
    protected $primaryKey = 'id';

    use SoftDeletes;

    protected $fillable = [
        'brand_id',
        'name'
    ];

    public function Brand()
    {
        return $this->belongsTo(Brand::class);
    }
}
