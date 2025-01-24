<?php

use Illuminate\Database\Eloquent\SoftDeletes;

class MasterTypeOutput extends BaseModel
{
  	protected $table='master_type_outputs';
    public $timestamps = true;
  	protected $primaryKey = 'id';

    use SoftDeletes;

    protected $fillable = [
        'brand_id',
        'name',
        'description',
        'active',
        'created_by',
        'updated_by'
    ];
    public function Brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function MasterEntries()
    {
        return $this->hasMany(MasterEntry::class);
    }
}
