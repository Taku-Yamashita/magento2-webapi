<?php

namespace Test\Ajaxapi\Api;

/**
 * Interface TwiceInterface
 * @package Test\Ajaxapi\Api
 */
interface TwiceInterface
{
    /**
     * @param \Test\Ajaxapi\Model\Webapi\Data\Number $number
     * @return int
     */
    public function sumNumber(
        \Test\Ajaxapi\Model\Webapi\Data\Number $number
    );
}
