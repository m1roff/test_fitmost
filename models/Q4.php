<?php

namespace app\models;

use Yii;
use yii\base\Model;

class Q4 extends Model
{
    public $k;
    public $b;
    public $x1;
    public $y1;
    public $x2;
    public $y2;

    public function rules()
    {
        return [
            [['k', 'b', 'x1', 'x2', 'y1', 'y2'], 'required'],
            [['k', 'b', 'x1', 'x2', 'y1', 'y2'], 'integer'],
        ];
    }

    /**
     * @return bool
     */
    public function isIntersect()
    {
        if( ($this->y1 > $this->y($this->x1)) && ($this->y2 > $this->y($this->x2)) ) return false;
        return true;
    }

    /**
     * @return string
     */
    public function getResult()
    {
        if(empty($this->k)
            )
        {
            return 'Заполните все поля.';
        }
        if( $this->isIntersect() ) return 'Пересекаются';
            else return 'Не пересекаются';
    }

    /**
     * @access private
     * @return int|float
     */
    private function y($v)
    {
        return ($this->k*$v+$this->b);
    }
}