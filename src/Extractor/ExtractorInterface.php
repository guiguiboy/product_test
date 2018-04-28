<?php
/**
 * Created by PhpStorm.
 * User: guigui
 * Date: 28/04/2018
 * Time: 22:19
 */

namespace Guigui\ProductTest\Extractor;

interface ExtractorInterface
{
    public function getEan();

    public function getPrice();

    public function getNutritions();

}
