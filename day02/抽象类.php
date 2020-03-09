<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/3/9 0009
 * Time: 17:36
 */

//当父类的一些方法不确定的时候 我们可以用abstract关键字来修饰该方法和类
//抽象类不能实例化
//抽象类可以没有抽象方法 非抽象方法和属性
//抽象方法不能有函数体
abstract class Animal{
    public $name;
    //只是声明而不是实现的时候 我们就可以使用abstract
    abstract public function cry();
    public function play(){
        echo '<br>lai wan a';
    }

}

class Cat extends Animal{

    //子类重写父类的抽象方法 实现该方法
    public function cry()
    {
        // TODO: Implement cry() method.
        echo '<br>xiaomao miao miao';
    }
}

$cat = new Cat();
$cat->cry();
$cat->play();
