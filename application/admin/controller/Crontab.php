<?php

namespace app\admin\controller;

use think\Controller;
use think\Db;


class Crontab extends Controller
{
    public function index()
    {
        //每分钟执行一次
        Db::table('crontab')->where('age','<',27)->delete();
    }

    public function look()
    {
        $arr=[58, 69, 589, 1258];
        //$arr=[8,58,5];
        $res=array_shift($arr);
        //var_dump($res.'----');
        echo "<pre/>";var_dump($arr);


      //$arr=[['p'=>5,'q'=>10],['p'=>89,'q'=>584]];
      //$a=5;
      //if (in_array($a,$arr)){
      //    echo 5555;
      //}else{
      //    echo 88888;
      //}

    }

}


/*

defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

require __DIR__.'/../vendor/autoload.php';
require __DIR__.'/../vendor/yiisoft/yii2/Yii.php';

$config = yii\helpers\ArrayHelper::merge(
    require(__DIR__ . '/../common/config/main.php'),
    require(__DIR__ . '/../common/config/main-local.php'),
    require(__DIR__ . '/config/main.php')
);

unset($config['defaultRoute']);

$code = (new yii\console\Application($config))->run();
if($code != 0)
    echo "errorCode: {$code}\n";
*/