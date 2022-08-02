<?php

namespace App\Repositories\EducationalInfo;

use App\Repositories\EducationalInfo\EducationalInfoInterface as EducationalInfoInterface;
use App\Models\Biodata\EducationalInfo;

class EducationalInfoRepository implements EducationalInfoInterface
{
    public $educationalInfo;

    function __construct(EducationalInfo $educationalInfo) {
	    $this->educationalInfo = $educationalInfo;
    }

    public function saveData($request, $biodataId)
    {   
        $data = [];
        foreach ($request as $key => $value) {
            $value = (object) $value;
            $data[] = array(
                'biodataId' => $biodataId,
                'institute' => $value->institute,
                'passingYear' => $value->passingYear,
                'result' => $value->result,
                'outOf' => $value->outOf,
            );
        }
        if ($this->educationalInfo->insert($data)) {
            return true;
        }
        return false;
    }

    public function updateData($request, $biodataId){
        $this->educationalInfo->where('biodataId', $biodataId)->delete();

        $data = [];
        foreach ($request as $key => $value) {
            $value = (object) $value;
            $data[] = array(
                'biodataId' => $biodataId,
                'institute' => $value->institute,
                'passingYear' => $value->passingYear,
                'result' => $value->result,
                'outOf' => $value->outOf,
            );
        }
        if ($this->educationalInfo->insert($data)) {
            return true;
        }
        return false;
    }
}