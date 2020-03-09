<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/3/9 0009
 * Time: 21:59
 */
//将一些抽象的方法封装到一起 在某个类需要使用的时候 只要实现该接口就可以了

//接口中的方法都是抽象方法 但是不需要abstract修饰
//接口中 不能有普通的成员属性 但是可以有常量
//必须把接口中定义的抽象方法全部实现
//一个接口不能继承其他的类 但是可以继承别的接口
interface iA{
    //求和
    public function getSum($a,$b);

    //求差
    public function getSub($a,$b);

    //常量
    const My_Pi=  3.14;
}

class A implements iA{
    public function getSub($a, $b)
    {
        return $a - $b;
    }
    public function getSum($a, $b)
    {
        return $a + $b;
    }
}

interface iB{
    public function a();
}
interface iC{
    public function c();
}
interface iD extends iB,iC{
    public function d();
}
$a = new  A();
$b = $a->getSub(15,10);
echo $b;