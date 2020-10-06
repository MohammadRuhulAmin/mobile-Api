<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class MessageController extends Controller
{
    public function messageSave(Request $request){


        $message = $request->input('message');
        $encodeMessage =urlencode($message);
        $authkey =''  ;
        $senderId ='' ;
        $route ='' ;
        $postData = $request->all();
        print_r($postData);
        exit();
        $mobile = "01403288711";
        $data = array(
            'authkey' =>$authkey,
            'mobile' => $mobile,
            'message' =>$encodeMessage,
            'sender' =>$senderId,
            'route' =>$route,
        );
        $sms_gateway_provider_url_link = "";
        $ch = curl_init();
        curl_setopt_array($ch,array(
            CURLOPT_URL =>$url,
            CURLOPT_RETURNTRANSFER =>true,
            CURLOPT_POST =>true,
            CURLOPT_POSTFIELDS =>$postData
        ));
        curl_setopt($ch,CURLOPT_SSL_VERIFYHOST,0);
        curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,0);
        $OUTPUT = curl_exec($ch);
        if(curl_errno($ch)){
            echo 'error:' . curl_error($ch);
        }
        curl_close($ch);
        return "message sent successfully";




    }
}
