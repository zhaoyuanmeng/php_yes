<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/3/11 0011
 * Time: 10:46
 */
$person = array(
  'name'=>'乔峰',
  'job'=>'帮主',
  'skill'=>'排云掌',
  'house'=>array(
      'name'=>'河北省',
      'price'=>1500
  )
);

//echo '<pre>';
//var_dump($person);
//数组转化成对象
$person_obj = (object)$person;
echo '<pre>';
var_dump($person_obj);

echo $person_obj->house['name'];

//对象转化成数组

class Cat{
    public $name='a';
    private $sex='nv';
    protected $age=15;
}
$cat = new Cat();
echo '<pre>';
var_dump($cat);
$cat_arr = (array)$cat;
echo '<pre>';
var_dump($cat_arr);
//转化后的数组只能访问原来的public属性
echo "<br>".$cat_arr['name'];


