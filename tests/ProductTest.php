<?php
/**
 * Created by PhpStorm.
 * User: guigui
 * Date: 28/04/2018
 * Time: 22:38
 */

namespace tests;

use Guigui\ProductTest\Product;

class ProductTest extends \PHPUnit\Framework\TestCase
{
    public function testGetProduct()
    {
        $json = json_decode(file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . 'product.json'), true);

        $product = new Product('es', $json);

        $this->assertEquals(0.9, $product->getPrice());
        $this->assertEquals('0000030000117', $product->getEan());
        $this->assertEquals(['glucides' => 0.5], $product->getNutritions());
    }
}
