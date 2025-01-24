<?php

use Illuminate\Database\Eloquent\SoftDeletes;

class DocumentType extends BaseModel
{
  	protected $table='document_types';
    public $timestamps = true;
  	protected $primaryKey = 'id';

    use SoftDeletes;
    protected $fillable = [
        'brand_id',
        'route',
        'name',
        'description',
        'priority',
        'document_response_types_id',
        'time_response',
        'allow_date_extension',
        'active',
        'physical_response',
        'locked',
        'created_by',
        'updated_by'
    ];

    public function Brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function DocumentResponseType()
    {
        return $this->belongsTo(DocumentResponseType::class);
    }
}
