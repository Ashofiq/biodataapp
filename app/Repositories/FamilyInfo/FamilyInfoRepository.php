<?php

namespace App\Repositories\FamilyInfo;

use App\Repositories\FamilyInfo\FamilyInfoInterface as FamilyInfoInterface;
use App\Models\Biodata\FamilyInfo;

class FamilyInfoRepository implements FamilyInfoInterface
{
    public $familyInfo;

    function __construct(FamilyInfo $familyInfo) {
	    $this->familyInfo = $familyInfo;
    }

    public function saveData($request, $biodataId)
    {   
        $data = [];
        foreach ($request as $key => $value) {
            $value = (object) $value;
            $data[] = array(
                'biodataId' => $biodataId,
                'relation' => $value->relation,
                'name' => $value->name,
                'ocupation' => $value->ocupation
            );
        }
        if ($this->familyInfo->insert($data)) {
            return true;
        }
        return false;
    }

    public function updateData($request, $biodataId){
        $this->familyInfo->where('biodataId', $biodataId)->delete();

        $data = [];
        foreach ($request as $key => $value) {
            $value = (object) $value;
            $data[] = array(
                'biodataId' => $biodataId,
                'relation' => $value->relation,
                'name' => $value->name,
                'ocupation' => $value->ocupation
            );
        }
        if ($this->familyInfo->insert($data)) {
            return true;
        }
        return false;
    }
}