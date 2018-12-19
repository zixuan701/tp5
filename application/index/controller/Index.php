<?php

namespace app\index\controller;

use think\Controller;
use think\Request;

class Index extends Controller
{
    /**
     *主页显示
     */
    public function index()
    {

        return $this->fetch('index');
    }

   /**
    * 邮件发送
    */
    public function mail()
    {
        $request=Request::instance();
        if($request->isGet()) {
            return $this->fetch('mail');
        }else{

            $to=$request->post('to');
            $title=$request->post('title');
            $content=$request->post('content');
            //echo "<pre>";var_dump($to);die;
            //调用方法发送邮件
            $res=sendMail($to,$title,$content);
            if ($res['error']){
                return $res['msg'];//成功
            }else{
                return $res['msg'];//失败
            }
        }
   }


   /**
    * 验证手机号
    */
}
