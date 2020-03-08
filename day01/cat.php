<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/3/8 0008
 * Time: 18:53
 */

//定义一个类
//类名定义为大拓峰的形式

class Cat{
    //定义属性的格式
    //访问修饰符 成员属性
    public $name;
    public $age;
    public $color;
}

//创建一个对象
//一个类可以创建多个对象
//不同的对象的标识符#编码是不一样的
$cat1 = new Cat();
$cat2 = new Cat();
$cat3 = new Cat();


//给对象赋值
$cat->name='xiaohong';
$cat->color='red';
$cat->age=18;

//使用一下
echo '<br>';
echo '猫的信息如下：';
echo '<br>名字是：'.$cat->name;
echo '<br>颜色是：'.$cat->color;
echo '<br>年龄是：'.$cat->age;

echo '<br>';
var_dump($cat1);
echo '<br>';
var_dump($cat2);
echo '<br>';
var_dump($cat3);

