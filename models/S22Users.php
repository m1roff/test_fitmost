<?php

namespace app\models;

use Yii;
use app\models\_base\S22Users as baseS22Users;

class S22Users extends baseS22Users
{

    /**
     * Получить кол-во сегодняшних заявок пользователя
     * @return int
     */
    public function getOrdersTodayCount()
    {
        return (int)$this->getOrdersToday()->count();
    }

    /**
     * Получить все сегодняшние заявки пользователя
     * @return Array
     */
    public function getOrdersToday()
    {
        return $this->getS22Orders()->where('DATE(date) = CURDATE()');
    }

    /**
     * Получить кол-во всех заяков пользователя
     * @return int
     */
    public function getOrdersCount()
    {
        return (int)$this->getS22Orders()->count();
    }
}
