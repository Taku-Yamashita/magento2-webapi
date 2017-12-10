<?php

namespace Test\Ajaxapi\Model\Webapi\Data;

/**
 * Class Number
 * @package Test\Ajaxapi\Model\Webapi\Data
 */
class Number implements \Test\Ajaxapi\Api\Data\NumberInterface
{
    /**
     * @var
     */
    protected $number;

    /**
     * @return int
     */
    public function getNum(){
        return $this->number;
    }

    /**
     * @param int $number
     * @return int
     */
    public function setNum($number){
        $this->number = $number;
        return $this->number;
    }
}
