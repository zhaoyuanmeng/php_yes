<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/3/8 0008
 * Time: 19:17
 */

class Cat{

    public $name;
    public $age;
    public $color;
}


$cat1 = new Cat();
$cat2 = new Cat();
$cat3 = new Cat();



$cat1->name='xiaohong';
$cat1->color='red';
$cat1->age=18;

//复制一下第一个猫
//此时是值传递 但是拷贝的不是数据本身而是对象标识符
//对象标识符指向数据区 他这个就是复制了一个对象标识符
$cat2 = $cat1;

//此时是引用传递 使用的同一个对象标识符指向数据区 一个改变都会改变
$cat3 = &$cat1;

echo '<br>';
echo '猫1的信息如下：';
echo '<br>名字是：'.$cat1->name;
echo '<br>颜色是：'.$cat1->color;
echo '<br>年龄是：'.$cat1->age;
echo '<br>';
echo '猫2的信息如下：';
echo '<br>名字是：'.$cat2->name;
echo '<br>颜色是：'.$cat2->color;
echo '<br>年龄是：'.$cat2->age;
echo '<br>';
echo '猫3的信息如下：';
echo '<br>名字是：'.$cat2->name;
echo '<br>颜色是：'.$cat2->color;
echo '<br>年龄是：'.$cat2->age;

echo '<br>';
var_dump($cat1);
echo '<br>';
var_dump($cat2);
echo '<br>';
var_dump($cat3);




