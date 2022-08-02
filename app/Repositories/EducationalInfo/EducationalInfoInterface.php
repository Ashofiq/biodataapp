<?php 

namespace App\Repositories\EducationalInfo;


interface EducationalInfoInterface {
    public function saveData($data, $biodataId);

    public function updateData($data, $id);
}