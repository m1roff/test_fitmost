<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%q5_sales}}".
 *
 * @property integer $id
 * @property integer $cust_id
 * @property string $date
 * @property string $summ_pay
 *
 * @property Q5Cust $cust
 */
class Q5Sales extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%q5_sales}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cust_id', 'date', 'summ_pay'], 'required'],
            [['cust_id'], 'integer'],
            [['date'], 'safe'],
            [['summ_pay'], 'number'],
            [['cust_id'], 'exist', 'skipOnError' => true, 'targetClass' => Q5Cust::className(), 'targetAttribute' => ['cust_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cust_id' => 'Cust ID',
            'date' => 'Date',
            'summ_pay' => 'Summ Pay',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCust()
    {
        return $this->hasOne(Q5Cust::className(), ['id' => 'cust_id']);
    }
}
