<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/3/8 0008
 * Time: 21:14
 */

class DaoMysqli{

    //定义一个静态属性来接收实例化对象
    private static $instance=null;
    //定义一个mysql的连接
    private $mysqli;

    private function __construct($_host,$_usr,$_pwd)
    {
        //数据库的连接
        $this->mysqli='a';

    }
    private function __clone()
    {
        // TODO: Implement __clone() method.
    }
    public function __set($name, $value)
    {
        // TODO: Implement __set() method.
    }
    public static function getSingleton($_host,$_usr,$_pwd){
        //instanceof 类型运算符 判断某个变量是否是某个类的对象实例
        if (!self::$instance instanceof self){
            self::$instance = new self($_host,$_usr,$_pwd);
        }
        echo '<pre>';
        var_dump(self::$instance);
        return self::$instance;
    }

}

$dao1 = DaoMysqli::getSingleton('localhost','zyd','admin');
$dao2 = DaoMysqli::getSingleton('localhost','zy','admin');