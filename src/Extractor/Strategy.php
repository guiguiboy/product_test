<?php
/**
 * Created by PhpStorm.
 * User: guigui
 * Date: 28/04/2018
 * Time: 22:12
 */

namespace Guigui\ProductTest\Extractor;

class Strategy
{
    public static function build(string $source, array $data)
    {
        if ($source === 'es') {
            return new Es($data);
        }
        throw new \InvalidArgumentException('Could not determine strategy');
    }
}
