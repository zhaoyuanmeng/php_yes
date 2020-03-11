<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/3/11 0011
 * Time: 10:58
 */

//对象序列是指：将一个对象转换成一个字符串 这个字符串包括 属性名 属性值 属性类型和该对象的类名
//序列化可以用于对象的保存和传输
//可以让多个文件共享对象 而且我们将序列化后的对象保存到文件中
class Cat{
    public $name='a';
    private $sex='nv';
    protected $age=15;

    public function __construct($_name,$_age,$_sex)
    {
        $this->name=$_name;
        $this->age=$_age;
        $this->sex=$_sex;


    }
}
$cat = new Cat('a',18,'nan');
//将$cat保存到文件中 在保存对象前 需要将$cat序列化
file_put_contents('d:/cat.log',serialize($cat));


echo '<br>保存成功';

//对象的反序列化
$cat_str = file_get_contents('d:/cat.log');
$cat_obj = unserialize($cat_str);

echo "<pre>";
var_dump($cat_obj);