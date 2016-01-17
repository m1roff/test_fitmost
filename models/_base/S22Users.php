<?php

namespace app\models\_base;

use Yii;

/**
 * This is the model class for table "{{%s22_users}}".
 *
 * @property integer $id
 * @property string $name
 * @property integer $age
 *
 * @property S22Orders[] $s22Orders
 */
class S22Users extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%s22_users}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'age'], 'required'],
            [['age'], 'integer'],
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
            'age' => 'Age',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getS22Orders()
    {
        return $this->hasMany(S22Orders::className(), ['user_id' => 'id']);
    }
}
