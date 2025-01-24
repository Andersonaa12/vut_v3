<?php

use Illuminate\Database\Eloquent\SoftDeletes;

class MasterEntrieTypeBased extends BaseModel
{
    public const ID_INTERNO = 1;
    public const ID_EXTERNO = 2;
    public const ID_ANONIMO = 3;
  	protected $table='master_entrie_type_baseds';
    public $timestamps = true;
  	protected $primaryKey = 'id';

    use SoftDeletes;

    protected $fillable = [
        'brand_id',
        'name',
        'description',
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
