<?php
namespace App\Service;

class Format {



    /**
     * 成功请求响应
     * @param boolean $status_code
     * @return string $msg
     */

    protected function sendSuccessResponse($status_code,$msg)
    {
        return $this->response->array([
            'message'=>$msg,
            'status_code'=>$status_code,
        ]);
    }

    /**
     * 失败请求响应
     * @param boolean $status_code
     * @return string $msg
     */
    protected function sendFailResponse($status_code,$msg)
    {
        return $this->response->error($status_code,$msg);
    }









}
