<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/3/8 0008
 * Time: 19:51
 */

/*
 * 魔术方法都是系统提供
 */

class Cat{
    public $name;
    protected $age;
    private $color;

    public  function __construct()
    {
        $this->name='xiao bei';
        $this->age = 18;
        $this->color='red';
    }

    //当使用不可访问的属性时 系统就会调用__get
    // 不可访问：属性不存在 protected private
    // 参数是属性名字
    public function __get($name)
    {
        // TODO: Implement __get() method.
        //首先判断一下该属性到底存不存在
        if (property_exists($this,$name)){
            return $this->name;
        }else{
            return '没有该属性 无法返回';
        }


    }
    //当给不可访问的属性赋值时 系统就会调用__set
    // 不可访问：属性不存在 protected private
    // 参数1：属性名 参数二：属性值
    public function __set($name, $value)
    {
        // TODO: Implement __set() method.
        //首先判断一下该属性到底存不存在
        if (property_exists($this,$name)){
            $this->$name = $value;
        }else{
            return '没有该属性 无法赋值';
        }
    }

    //判断一个不可访问的属性时就会调用这个
    public function __isset($name)
    {
        // TODO: Implement __isset() method.
    }
    //删除一个不可访问的属性时候就会调用这个
    public function __unset($name)
    {
        // TODO: Implement __unset() method.
    }

    //当输出一个对象时 就会触发这个该函数
    // 没有形参 要求返回一个字符串
    // 需要debug的时候可以通过他输出对象信息
    public function __toString()
    {
        // TODO: Implement __toString() method.
        return '<br>123';
    }

    //如果我们想要阻止克隆 可以将访问修饰符改为private >单例模式
    // 对象的clone则会触发这个方法
    public function __clone()
    {
        // TODO: Implement __clone() method.
        echo "<br>clone被调用！！";
    }

    //希望调用不可访问的成员方法的时候
    //不过我们经常用别的方式
    public function __call($name, $arguments)
    {
        // TODO: Implement __call() method.

    }
    private function Age(){
        return $this->age;
    }

    public function gitAge(){
        return $this->Age();
    }

}


$cat1 = new Cat();
$cat2 = new Cat();

//我们想要访问 受保护的年龄
echo '<br>受保护的年龄是：'.$cat1->age;

//我们想要给 私有的颜色赋值
$cat1->color = 'yellow';
echo '<br>私有的颜色为:'.$cat1->color;

//对象的clone触发__clone
$cat2 = clone $cat1;


//属性重载现象 如果没有写__set 就会自动添加上一个没有的属性

//输出一个对象的时候就会调用tostring
echo $cat1;

echo $cat1->gitAge();