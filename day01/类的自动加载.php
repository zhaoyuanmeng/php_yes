<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/3/8 0008
 * Time: 20:25
 */

//加载类与位置的映射关系
require './common.php';

//参数：类名
function myautoload($classname){
    //判断一下有没有那个类名
    if (true){
        global $classMap;
        require $classMap[$classname];
    }else{
        echo 'no';
    }
}
//注册自己定义的加载函数
spl_autoload_register('myautoload');



//调用没有声明的类会触发自己定义的myautoload
$dog = new Dog('xiaohong');
$dog->jiao();
