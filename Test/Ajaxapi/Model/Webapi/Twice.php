<?php

namespace Test\Ajaxapi\Model\Webapi;

/**
 * Class Twice
 * @package Test\Ajaxapi\Model\Webapi
 */
class Twice implements \Test\Ajaxapi\Api\TwiceInterface
{

    /**
     * @param \Test\Ajaxapi\Model\Webapi\Data\Number $number
     * @return int
     */
    public function sumNumber(
        \Test\Ajaxapi\Model\Webapi\Data\Number $number
    ){
        $num = $number->getNum();
        $twice = 2 * $num;
        return $twice;
    }
}
