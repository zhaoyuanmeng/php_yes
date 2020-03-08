<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/3/8 0008
 * Time: 21:04
 */

/*
 *静态方法中只能访问静态属性，不能访问非静态属性
 * 普通飞方法都可以访问
 *  如果静态方法是protected或者privatez则也不能在类的外部使用
 */
class Child{
    public $name;
    private static $number=0;
    public function __construct($_name)
    {
        $this->name=$_name;
    }

    public function join(){
        echo '<br>'.$this->name.'加入了游戏';
        self::$number++;
    }
    public function show(){
        echo '<br>一共有：'.self::$number.'ren';
    }
    public static function showNum(){
        echo '<br>number:'.self::$number;
    }
}
Child::showNum();


//克隆以后对象修饰符增量
//$a = new Child('a');
//$b = clone $a;
//echo '<pre>';
//var_dump($a,$b);