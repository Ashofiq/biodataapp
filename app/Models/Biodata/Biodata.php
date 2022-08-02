<?php

namespace App\Models\Biodata;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Biodata\FamilyInfo;
use App\Models\Biodata\EducationalInfo;
use Storage;

class Biodata extends Model
{
    use HasFactory;

    public function family()
    {
        return $this->hasMany(FamilyInfo::class, 'biodataId');
    }

    public function education()
    {
        return $this->hasMany(EducationalInfo::class, 'biodataId');
    }

    public function getUserPhotoAttribute()
    {
        return url('storage/images/'.$this->photo);
    }
}
