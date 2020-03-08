<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/3/8 0008
 * Time: 20:30
 */
class Dog{
    public $name;
    public function __construct($_name)
    {
        $this->name = $_name;
    }
    public function jiao(){
        echo '<br>'.$this->name.'哇哇叫';
    }

}