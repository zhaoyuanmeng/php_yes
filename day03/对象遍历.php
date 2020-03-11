<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/3/11 0011
 * Time: 10:32
 */
class Cat{
    public $name;
    protected $age;
    private $sex;
    public function __construct($_name,$_age,$_sex)
    {
        $this->name = $_name;
        $this->age = $_age;
        $this->sex = $_sex;
    }

    //遍历的形式显示属性信息
    public function showInfo(){
        echo '<br>'.'属性信息是：';
        foreach ($this as $key =>$val){
            echo "<br> $key=$val";
        }

    }
}

$cat = new Cat('xiao',18,'nv');

$cat->showInfo();