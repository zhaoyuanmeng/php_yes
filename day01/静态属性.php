<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/3/8 0008
 * Time: 20:47
 */
/*静态变量属于所有的对象 因此可以被所有的对象共享
 *类内部使用静态属性可以是self也可以是类名
 *
*/
class Child{
    public $name;
    public static $number=0;
    public function __construct($_name)
    {
        $this->name=$_name;
    }

    public function join(){
        echo '<br>'.$this->name.'加入了游戏';
        self::$number++;
    }
    public function show(){
        echo '<br>一共有：'.self::$number.'ren';
    }
}

$child1 = new Child('xiaohong');
$child2 = new Child('xialong');
$child3 = new Child('xiaong');

$child1->join();
$child2->join();
$child3->join();

$child1->show();

//外部访问静态属性条件是public
echo '<br>'.Child::$number;