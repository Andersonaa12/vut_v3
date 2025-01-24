<?php

use Illuminate\Database\Eloquent\SoftDeletes;

class DocumentMasterEntry extends BaseModel
{
    protected $table='document_master_entries';
    public $timestamps = true;
    protected $primaryKey = 'id';

    use SoftDeletes;
    protected $fillable = [
        'brand_id',
        'master_entrie_id',
        'document_id'
    ];

    public function Brand()
    {
        return $this->BelongsTo(Brand::class);
    }

    public function MasterEntry()
    {
        return $this->belongsTo(MasterEntry::class);
    }

    public function Document()
    {
        return $this->belongsTo(MasterEntriesDocument::class);
    }
}
