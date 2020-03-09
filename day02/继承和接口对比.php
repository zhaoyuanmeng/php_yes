<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/3/9 0009
 * Time: 22:16
 */
class Monkey{
    public $name;
    public function __construct($_name)
    {
        $this->name=$_name;

    }
    //猴子爬树
    public function climb(){
        echo '<br>'.$this->name.'在爬树！！';
    }

}
interface iA{
    public function fly();
}

interface iB{
    public function eat();
}


class smallMoney extends Monkey implements iA,iB{
    public function fly()
    {
        echo '<br>fly';
    }
    public function eat()
    {
       echo '<br>eat';
    }
}

$smoll = new smallMoney('sunwukong');
$smoll->fly();
