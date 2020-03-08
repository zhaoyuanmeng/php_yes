<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/3/8 0008
 * Time: 19:26
 */

class Cat{
    //定义属性的格式
    //访问修饰符 成员属性
    public $name;
    public $age;
    public $color;

    /**
     * @return age
     */
    //默认访问修饰符是public

    public function getAge()
    {
        return $this->age;
    }

}

$cat1 = new Cat();
$cat1->name='xiaohong';
$cat1->color='red';
$cat1->age=18;

//调用成员方法
//成员方法可以没有return，默认返回null
//成员方法必须使用对象调用 不可以直接调用
$age = $cat1->getAge();

echo '年龄是：'.$age;



