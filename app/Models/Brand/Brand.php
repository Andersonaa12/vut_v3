<?php

use Illuminate\Database\Eloquent\SoftDeletes;

class Brand extends BaseModel
{
    protected $table = 'brands';
    public $timestamps = true;
    protected $primaryKey = 'id';

    use SoftDeletes;
    protected $fillable = [
        'name',
        'description',
        'image',
        'ip',
        'public_url',
        'active'
    ];
    public function Dependencies()
    {
        return $this->hasMany(Dependency::class);
    }

    public function Series()
    {
        return $this->hasMany(Series::class);
    }

    public function SubserieSupports()
    {
        return $this->hasMany(SubserieSupport::class);
    }

    public function SubserieFinalDispositions()
    {
        return $this->hasMany(SubserieFinalDisposition::class);
    }

    public function DocumentResponseTypes()
    {
        return $this->hasMany(DocumentResponseType::class);
    }

    public function DocumentTypes()
    {
        return $this->hasMany(DocumentType::class);
    }

    public function MasterEntrieTypeBaseds()
    {
        return $this->hasMany(MasterEntrieTypeBased::class);
    }

    public function MasterEntrieStatuses()
    {
        return $this->hasMany(MasterEntrieStatus::class);
    }

    public function MasterTypeOutputs()
    {
        return $this->hasMany(MasterTypeOutput::class);
    }

    public function MasterConsecutives()
    {
        return $this->hasMany(MasterConsecutive::class);
    }

    public function MasterEntries()
    {
        return $this->hasMany(MasterEntry::class);
    }

    public function MasterEntriesDocuments()
    {
        return $this->hasMany(MasterEntriesDocument::class);
    }

    public function MasterEntrieDetails()
    {
        return $this->hasMany(MasterEntrieDetail::class);
    }

    public function MasterEntrieAssignedUsers()
    {
        return $this->hasMany(MasterEntrieAssignedUser::class);
    }

    public function DocumentMasterEntries()
    {
        return $this->hasMany(DocumentMasterEntry::class);
    }
}
