<?php

use Illuminate\Database\Eloquent\SoftDeletes;

class DocumentResponseType extends BaseModel
{
    protected $table='document_response_types';
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
