<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "q6_news".
 *
 * @property integer $id
 * @property string $anons
 * @property string $text
 */
class Q6News extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'q6_news';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['anons', 'text'], 'required'],
            [['text'], 'string'],
            [['anons'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'anons' => 'Anons',
            'text' => 'Text',
        ];
    }
}
