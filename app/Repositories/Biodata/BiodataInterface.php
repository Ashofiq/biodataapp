<?php 

namespace App\Repositories\Biodata;


interface BiodataInterface {
    public function saveData($data);
    public function list();
    public function deleteData($id);
    public function getById($id);
    public function updateData($data, $id);
}