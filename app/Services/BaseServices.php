<?php

namespace App\Services;

class BaseServices
{
    public function sendResponse($data,$msg,$code = 200)
    {
        $response = [
          'status'=>201,
          'data'=>$data,
            'msg'=>$msg
        ];
        return response()->json($response,$code);
    }

    public function sendError($data,$msg,$code = 404)
    {
        $response = [
            'status'=>false,
            'data'=>$data,
            'msg'=>$msg
        ];
        return response()->json($response);
        }
}
