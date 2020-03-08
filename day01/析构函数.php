<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/3/8 0008
 * Time: 19:43
 */

class Cat{
    public $name;
    public $age;
    public $color;

    public  function __construct()
    {
        $this->name='xiao bei';
    }


    //没有形参 在如下情况下系统调用
    //1.php文件执行完毕
    //2.某个对象的所有引用都被删除后
    //应用是 垃圾回收机制 数据库的关闭
    public function __destruct()
    {
        // TODO: Implement __destruct() method.
        echo '<br>析构函数被调用'.$this->name;
    }
}
$cat1 = new Cat();
//$cat1 = 'abc';

echo 'aa';
