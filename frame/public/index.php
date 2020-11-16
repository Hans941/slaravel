<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/11/14 0014
 * Time: 17:51
 */

require_once  __DIR__.'/../vendor/autoload.php';

//初始化app，绑定根目录等
$app = new \Slaravel\Foundation\Application($_ENV['APP_BASE_PATH'] ?? dirname(__DIR__));
//var_dump($app);

$app->singleton('kernel',\App\Http\Kernel::class);

//在使用容器获取kernel类，并注入app（内部需要使用application类进行类的注入）
$kernel = $app->make('kernel',[$app]);
//使用kernel的handle方法，处理请求
$kernel->handle($request = null);

//读取配置测试
var_dump($app->make('Config')->all());
//


//门面测试
//\Slaravel\Support\Facades\FacadeTest::test();


//ArrayAccess接口，当像调用数组一样使用类时触发 例如$this['event']
//class AC implements ArrayAccess
//{
//    /**
//     * 对象当做数组判断时触发
//     * @param mixed $offset
//     */
//    public function offsetExists($offset)
//    {
//        echo '1';
//        // TODO: Implement offsetExists() method.
//    }
//
//    /**
//     * 对象当做数组获取触发
//     * @param mixed $offset
//     */
//    public function offsetGet($offset)
//    {
//        echo 2;
//        // TODO: Implement offsetGet() method.
//    }
//
//    /**
//     * 把对象当做数组设置时
//     * @param mixed $offset
//     * @param mixed $value
//     */
//    public function offsetSet($offset, $value)
//    {
//        // TODO: Implement offsetSet() method.
//    }
//
//    /**
//     * 对象当做数组unset时触发
//     * @param mixed $offset
//     */
//    public function offsetUnset($offset)
//    {
//        // TODO: Implement offsetUnset() method.
//    }
//}
//
//$a = new AC();
//$a['abc'];