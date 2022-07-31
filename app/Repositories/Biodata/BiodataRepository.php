<?php

namespace App\Repositories\Biodata;

use App\Repositories\Biodata\BiodataInterface as BiodataInterface;
use App\Models\Biodata\Biodata;

class BiodataRepository implements BiodataInterface
{
    public $biodata;

    function __construct(Biodata $biodata) {
	    $this->biodata = $biodata;
    }

    public function saveData($request)
    {   
        $biodata = $this->biodata;
        $biodata->name = $request->name;
        $biodata->nickname = $request->nickname;
        $biodata->email = $request->email;
        $biodata->phone = $request->phone;
        $biodata->contactNo = $request->contactNo;
        $biodata->dob = $request->dob;
        $biodata->gender = $request->gender;
        $biodata->height = $request->height;
        $biodata->weight = $request->weight;
        $biodata->religion = $request->religion;
        $biodata->presantAddress = $request->presantAddress;
        $biodata->permanentAddress = $request->permanentAddress;
        $biodata->hobbie = $request->hobbie;

        if ($biodata->save()) {
            return true;
        }

        return false;
    }

    
}