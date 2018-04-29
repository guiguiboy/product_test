<?php
/**
 * Created by PhpStorm.
 * User: guigui
 * Date: 29/04/18
 * Time: 15:14
 */

require_once __DIR__ . '/SampleObject.php';


$startSetter = microtime(true);
for ($i = 0; $i <= 10000; $i++)
{
    $obj = new \tests\Benchmark\SampleObject();
    $obj->setValue('test');
}
$endSetter = microtime(true);

$startReflection = microtime(true);
for ($i = 0; $i <= 10000; $i++)
{
    $obj = new \tests\Benchmark\SampleObject();
    $reflectionProperty = new ReflectionProperty('\tests\Benchmark\SampleObject', 'value');
    $reflectionProperty->setAccessible(true);
    $reflectionProperty->setValue($obj, 'test');
}
$endReflection = microtime(true);


echo "setter : " . ($endSetter - $startSetter) . "\n";
echo "reflection : " . ($endReflection - $startReflection) . "\n";

echo ((($endSetter - $startSetter) < ($endReflection - $startReflection)) ? 'setter' : 'reflection') . ' is faster';

echo "\n";
