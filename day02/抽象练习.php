<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/3/9 0009
 * Time: 17:44
 */
abstract class Superman{

    protected $name;
    protected $age;
    abstract public function fly();
    abstract public function run();
    public function __construct($_age,$_name)
    {
        $this->age=$_age;
        $this->name=$_name;
    }

}

class Zhizhu extends Superman{
    public function fly()
    {
        echo '<br>'.$this->name.'蜘蛛虾来了';
    }
    public function run()
    {
        echo '<br>is age:'.$this->age;
    }
}

class Gangti extends Superman{
    public function fly()
    {
        echo '<br>'.$this->name.'钢铁侠来了';
    }
    public function run()
    {
        echo '<br>is age:'.$this->age;
    }
}

$zhi = new Zhizhu(15,'yy');
$zhi->fly();
$zhi->run();

$gang = new Gangti(15,'asd');
$gang->fly();
$gang->run();