<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/3/9 0009
 * Time: 22:43
 */


//定义常量的同时也要赋初值 名字都大写 中间可以_隔开
//const前面不用写访问修饰符 默认public
//内部访问 self:: 类名:: 接口::
//外部访问 类名:: 接口::
//常量可以被子类继承
//常量可以是 int string bool float array 但是不可以是对象

class Clerk{
    const TAX = 0.8;
    public function getTax(){
        echo '<br>缴税为：'.self::TAX;
    }
}
class SonClerk extends Clerk{
    const TAX =0.9;
    public function get(){
        echo '<br>wei:'.self::TAX;
    }
}

$a = new Clerk();
$a->getTax();

$b = new SonClerk();
$b ->get();
echo '<br>clerk:'.Clerk::TAX;
echo '<br>sonclerk:'.SonClerk::TAX;