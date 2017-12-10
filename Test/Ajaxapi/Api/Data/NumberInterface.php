<?php

namespace Test\Ajaxapi\Api\Data;


/**
 * Interface NumberInterface
 * @package Test\Ajaxapi\Api\Data
 */
interface NumberInterface
{
    /**
     * @return int
     */
    public function getNum();

    /**
     * @param int $number
     * @return self
     */
    public function setNum($number);
}
