<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%q5_cust}}".
 *
 * @property integer $id
 * @property string $name
 *
 * @property Q5Sales[] $q5Sales
 */
class Q5Cust extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%q5_cust}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getQ5Sales()
    {
        return $this->hasMany(Q5Sales::className(), ['cust_id' => 'id']);
    }

    public function getTheBest()
    {
        $sql = 'SELECT cust.name, SUM(sales.summ_pay) as total FROM '.Q5Sales::tableName().' as sales '
            .' INNER JOIN '.self::tableName().' as cust ON (cust.id = sales.cust_id)'
            .' GROUP by sales.cust_id ORDER BY total DESC LIMIT 1';
        return Yii::$app->db->createCommand($sql)->queryOne();
    }
}
