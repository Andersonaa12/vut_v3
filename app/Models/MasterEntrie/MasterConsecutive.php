<?php

use Illuminate\Database\Eloquent\SoftDeletes;

class MasterConsecutive extends BaseModel
{
  	protected $table='master_entrie_type_based_id';
    public $timestamps = true;
  	protected $primaryKey = 'id';

    use SoftDeletes;
    protected $fillable = [
        'brand_id',
        'master_entrie_type_based_id',
        'consecutive',
        'prefix',
        'year',
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
}
