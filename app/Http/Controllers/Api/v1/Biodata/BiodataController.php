<?php

namespace App\Http\Controllers\Api\v1\Biodata;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helper\RespondsWithHttpStatus;
use App\Repositories\Biodata\BiodataInterface;
use App\Repositories\EducationalInfo\EducationalInfoInterface;
use App\Repositories\FamilyInfo\FamilyInfoInterface;
use Validator;
use Helper;

class BiodataController extends Controller
{   
    use RespondsWithHttpStatus;
    public $biodata, $educationalInfo, $familyInfo;
    public function __construct(BiodataInterface $biodata, 
                            EducationalInfoInterface $educationalInfo,
                            FamilyInfoInterface $familyInfo
                        ){
        $this->biodata = $biodata;
        $this->educationalInfo = $educationalInfo;
        $this->familyInfo = $familyInfo;
    }

    public function index()
    {
        return $this->success('success', []);
    }

    public function saveBiodata(Request $request)
    {       
        $validationData = $request->validate([
            'name' => 'required',
            'nickname' => 'required',
            'email' => 'required|unique:biodatas',
            'phone' => 'required|min:11'
        ]);

        $final = $this->biodata->saveData($request);
        if ($final != null) {
            $this->educationalInfo->saveData($request->educationalForms, $final->id);
            $this->familyInfo->saveData($request->familyForms, $final->id);
            return $this->success('success', []);
        }

        return $this->failure('Something wrong', []);
    }

    public function listBiodata()
    {
        $data['biodatas'] = $this->biodata->list();
        return $this->success('success', $data);
    }

    public function deleteBiodata($id)
    {
        $final = $this->biodata->deleteData($id);

        if ($final) {
            return $this->success('success', []);
        }

        return $this->failure('Something wrong', []);
    }

    public function editBiodata($id)
    {
        $final = $this->biodata->getById($id);

        if ($final) {
            
            return $this->success('success', $final);
        }

        return $this->failure('Something wrong', []);
    }

    public function updateBiodata($id, Request $request)
    {   
        $final = $this->biodata->updateData($request, $id);
        if ($final) {
            $this->educationalInfo->updateData($request->educationalForms, $final->id);
            $this->familyInfo->updateData($request->familyForms, $final->id);
            return $this->success('success', $final);
        }

        return $this->failure('Something wrong', []);
    }
}
