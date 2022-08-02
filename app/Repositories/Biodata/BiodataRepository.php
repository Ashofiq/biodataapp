<?php

namespace App\Repositories\Biodata;

use App\Repositories\Biodata\BiodataInterface as BiodataInterface;
use App\Models\Biodata\Biodata;
use Image;
use Storage;

class BiodataRepository implements BiodataInterface
{
    public $biodata;

    function __construct(Biodata $biodata) {
	    $this->biodata = $biodata;
    }

    public function saveData($request)
    {   

        $fileName = '';
        if ($request->photo) {
            $image      = $request->file('photo');
            $fileName   = time() . '.png';

            $img = Image::make($request->photo)->resize(240, 200);
            $img->stream(); 
            Storage::disk('local')->put('public/images'.'/'.$fileName, $img, 'public');
        }

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
        $biodata->photo = $fileName;
        $biodata->skills = $this->getSkills($request->skills);

        if ($biodata->save()) {
            return $biodata;
        }

        return false;
    }

    public function getSkills($skills)
    {   
        if (COUNT($skills) == 0) {
            return '';
        }

        $data = '';
        foreach ($skills as $key => $value) {
            if ($value['selected']) {
                $data .= $value['name'].',';
            }
        }
        return substr($data, 0, -1);
    }

    public function list(){
        return $this->biodata->get();
    }

    public function deleteData($id){
        $biodata = $this->biodata->find($id);
        if ($biodata) {
            Storage::disk('local')->delete('public/images/'.$biodata->photo);
            $biodata->delete();
            return true;
        }

        return false;
    }

    public function getById($id){
        $biodata = $this->biodata->with('family', 'education')->find($id);
        if ($biodata) {
            return $biodata;
        }

        return false;
    }

    public function updateData($request, $id){
        
        $biodata = $this->biodata->find($id);

        $fileName = '';
        if ($request->newphoto) {
            $image      = $request->file('newphoto');
            $fileName   = time() . '.png';

            $img = Image::make($request->newphoto)->resize(240, 200);
            $img->stream(); 
            Storage::disk('local')->put('public/images'.'/'.$fileName, $img, 'public');

            // delete old photo
            Storage::disk('local')->delete('public/images/'.$biodata->photo);
        }

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
        $biodata->skills = $this->getSkills($request->skills);

        if ($fileName != '') {
            $biodata->photo = $fileName;
        }

        if ($biodata->save()) {
            return $biodata;
        }

        return false;
    }
}