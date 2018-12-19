<?php

namespace app\admin\controller;

use think\Controller;
use think\Db;
use think\Request;

class Test extends Controller
{
    public function index()
    {
        return $this->fetch('biao');
    }

    public function tt()
    {
        $sid="world_999";
        $rid="274386351308401";
        $time="86400";
        $type=2;
        $si="cmlkPTI3NDM4NjM1MTMwODQwMSZzaWQ9d29ybGRfOTk5JnRpbWU9ODY0MDAmdHlwZT0yJnNpZ249OThhYTE2NjYzOGU1OWFmNTkxZTNmYzliNDM3ZjA3ZDM";
    }
}
