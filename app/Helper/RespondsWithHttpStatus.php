<?php 

namespace App\Helper;

trait RespondsWithHttpStatus
{
    protected function success($message, $data = [], $status = 200)
    {
        return response([
            'success' => true,
            'data' => $data,
            'message' => $message,
        ], $status);
    }

    protected function failure($message, $data, $status = 422)
    {
        return response([
            'success' => false,
            'data' => $data,
            'message' => $message,
        ], $status);
    }
}