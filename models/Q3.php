<?php

namespace app\models;

use Yii;
use yii\base\Model;

class Q3 extends Model
{
    /**
     * @return string
     */
    public function getText()
    {
        return 'vasya1@gmail.com пишите мне на vasya@gmail.com по любому vasya2@gmail.com вопросу';
    }

    /**
     * @return string
     */
    public function getRightText()
    {
        $reg = '/[a-z0-9_-]+@[a-z0-9_-]+\.([a-z0-9_-][a-z0-9_]+)/';
        $to = '<a href="mailto:\\0">[email]</a>';
        return preg_replace(mb_strtolower($reg), $to, $this->text);
    }
}