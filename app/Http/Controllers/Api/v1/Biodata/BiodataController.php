<?php

namespace App\Http\Controllers\Api\v1\Biodata;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helper\RespondsWithHttpStatus;

class BiodataController extends Controller
{   
    use RespondsWithHttpStatus;

    public function index()
    {
        return $this->success('success', []);
    }
}
