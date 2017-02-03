<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "params".
 *
 * @property string $id
 * @property string $phone
 * @property string $mail
 */
class ParamsModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'params';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['phone', 'mail'], 'required'],
            [['phone'], 'string', 'max' => 50],
            [['mail'], 'string', 'max' => 150],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'id',
            'phone' => 'Телефон',
            'mail' => 'Электронная почта',
        ];
    }
    
    
    /**
     * Извлекаем список параметров сайта
     */
    public static function paramsList(){
    
        $params = self::find()->where(['id'=>1])->asArray()->one();
        return (array)$params;
    
    }
}
