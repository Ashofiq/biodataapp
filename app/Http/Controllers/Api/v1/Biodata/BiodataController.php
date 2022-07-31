<?php

namespace App\Http\Controllers\Api\v1\Biodata;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helper\RespondsWithHttpStatus;
use App\Repositories\Biodata\BiodataInterface;
use Validator;
use Helper;

class BiodataController extends Controller
{   
    use RespondsWithHttpStatus;
    public $biodata;
    public function __construct(BiodataInterface $biodata){
        $this->biodata = $biodata;
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

        if ($final) {
            return $this->success('success', []);
        }

        return $this->failure('Something wrong', []);
    }
}
