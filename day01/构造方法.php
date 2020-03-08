<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/3/8 0008
 * Time: 19:32
 */

class Cat{

    public $name;
    public $age;
    public $color;

    //构造函数没有return 而且只能有一个
    //也可以使用类名作为构造函数
    //系统自动调用 我们不可以调用
    //运行机制：在创建一个类的对象实例化的时候就会自动调用这个函数
    //只是起到初始化成员属性的作用 并没有创建对象本身
    public function __construct($_name,$_age,$_color)
    {
        //对成员的初始化
        $this->age = $_age;
        $this->name =$_name;
        $this->color =$_color;

        //测试一个是不是先调用构造函数
        echo  'hi hi hi';
    }
}

$name = 'xiao hong';
$age = 18;
$color = 'red';
$cat = new Cat($name,$age,$color);

var_dump($cat);