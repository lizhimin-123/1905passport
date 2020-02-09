<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function check2(){
        //保持一致
        $key = '憨憨抱拳';
        //接收
        $json_data = $_POST['data'];
        $sign = $_POST['sign'];

        //计算签名
        $sign2=md5($json_data.$key);
        echo '接收端计算签名: '.$sign2;echo '<br>';

        //对比接收到的签名
        if($sign2==$sign){
            echo '验签成功';
        }else{
            echo '验签失败';
        }



    }





}