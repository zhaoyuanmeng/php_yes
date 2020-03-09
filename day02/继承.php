<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/3/9 0009
 * Time: 17:17
 */

class Student {
    public $name;
    public $age;
    private $grade;

    //构造函数
    public function __construct($_name,$_age)
    {
        $this->name=$_name;
        $this->age=$_age;
    }
    //输入分数
    public function setGrade($grade){
        $this->grade=$grade;

    }

    //查看分数
    public function showGrade(){
        echo '<br>'.$this->age.'的成绩为'.$this->grade;
    }

}

//小学生
class Small extends Student{
    //小学生考试
    public function test()
    {
        echo '<br>小学生在做题';
    }
}

//大学生
class Big extends Student{
    //小学生考试
    public function test()
    {
        echo '<br>大学生在做题';
    }
}

$small = new Small('xiaoming',12);
$small->test();
$small->setGrade(522);
$small->showGrade();

$big = new Big('xiaohei',19);
$big->test();
$big->setGrade(222);
$big->showGrade();

//子类只能访问父类的public 和protected
//子类不能访问父类的private属性

//继承的本质是建立一中联系
/*
 * 当我们访问子类的某个属性的时候 首先到子类中去查找有没有这个属性或者方法 如果有
   就访问如果没有就报错
 *
 * 子类没有构造函数的时候会自动调用父类的构造函数
 *
 * 如果想调用父类的方法 可以使用类名::方法名 或者parent::方法名
 * 如果子类的方法名和父类的方法名相同 我们称为方法重写 必须保持参数类型一致
 *
 */
