<?php 

namespace App\Repositories\FamilyInfo;


interface FamilyInfoInterface {
    public function saveData($data, $biodataId);
    public function updateData($data, $id);
}