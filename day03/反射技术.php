<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/3/11 0011
 * Time: 11:11
 */

class Cat{
    public $name;
    public $age;

    public function index(){
        echo 'index<br>';
    }
    public function test($year=2016,$month=1,$day=10){
        echo $year.'-----'.$month.'----'.$day;
    }

    //前置处理
    public function _before_index(){
        echo '<br>'.'前期处理';
        echo __FUNCTION__.'<br>';
    }
    //后期处理
    public function _after_index(){
        echo '<br>后期处理..';
        echo __FUNCTION__.'<br>';
    }
}

//反射机制的书写
if (class_exists('Cat')){
    //创建一个reflectionClass对象['Cat']类
    $reflect_object = new ReflectionClass('Cat');
    //判断是否有index方法
    if($reflect_object->hasMethod('index')){
        //创建一个index方法对象 也就是说这个方法是一个对象
        $reflect_method_index = $reflect_object->getMethod('index');
        //判断是不是public
        if ($reflect_method_index->isPublic()){
            //判断是有_before_index
            if ($reflect_object->hasMethod('_before_index')){
                $reflect_method_before=$reflect_object->getMethod('_before_index');
                if ($reflect_method_before->isPublic()){
                    $reflect_method_before->invoke($reflect_object->newInstance());
                }else{
                    echo '<br>方法不是public';
                }
            }
        }

    }
    //调用test方法
    $reflect_object->getMethod('test')->invoke($reflect_object->newInstance(),2018,11,11);

    //判断是否有_after_index方法
    if ($reflect_object->hasMethod('_after_index')){
        $reflect_method_after = $reflect_object->getMethod('_after_index');
        if ($reflect_method_after->isPublic()){
            $reflect_method_after->invoke($reflect_object->newInstance());
        }
    }
}