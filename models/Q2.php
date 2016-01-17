<?php

namespace app\models;

use Yii;
use yii\base\Model;

class Q2 extends Model
{
    /**
     * @var Array
     */
    private $_intArray = [];
    /**
     * @var int
     */
    public $arrayCount = 4;

    /**
     * Инициализация
     */
    public function init()
    {
        $this->generateArray();
    }


    /**
     * Геттер
     * @return Array
     */
    public function getIntArray()
    {
        return $this->_intArray;
    }

    /**
     * Геттер
     * @return int|null
     */
    public function getNotRepeated()
    {
        $_repeats = array_count_values($this->intArray);
        foreach($_repeats as $k => $v)
        {
            if($v==1) return $k;
        }
        return null;
    }



    /**
     * @access private
     */
    private function generateArray()
    {
        $_existsValue = [];
        for($i=0; $i<$this->arrayCount; ++$i)
        {
            do {
                $value = $this->getRandValue();
            }while(in_array($value, $_existsValue));
            $this->_intArray[] = $value;
            $this->_intArray[] = $value;
        }
        array_pop($this->_intArray);
        shuffle($this->_intArray);
    }

    /**
     * @access private
     * @return int
     */
    private function getRandValue()
    {
        return rand(1,$this->arrayCount*15);
    }
}