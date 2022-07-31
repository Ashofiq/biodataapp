<?php 
namespace App\Helper;
use Hash;

class Helper{
    const VALIDATOR_FAIL_MESSAGE = 'Validate fails';

    // get validate error message 
    public static function validateErrorMsg($messages){
        $messages = $messages->all();
        $data = [];
        foreach ($messages as $message) {
            $data[] = $message;
        }
        return $data;
    }

    // remove unNessary or danger attact
    public static function removeDanger($str){
        return htmlspecialchars($str);
    }

    // Make Hash
    public static function makeHash($str){
        return Hash::make($str);
    }
}