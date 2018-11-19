<?php

namespace app\admin\controller;

use think\Controller;
use think\Db;


class Crontab extends Controller
{
    public function index()
    {
//        var_dump(188823);die;
        Db::table('crontab')->where('age','<',26)->delete();
    }
}
