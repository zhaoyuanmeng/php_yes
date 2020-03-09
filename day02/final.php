<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/3/9 0009
 * Time: 22:34
 */
//当不希望某个成员方法被子类重写时 我们可以将该方法修饰为final
//不希望类被继承的时候 可以定义为final类

final class Superman{
    final  public function Atrack(){
        echo '<br>shang';
    }
}

//class ZhiZhu extends Superman{
////    public function Atrack(){
////        echo '<br>ssss';
////    }
//}

$zhi = new Zhizhu();
$zhi->Atrack();