<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "pages".
 *
 * @property string $id
 * @property string $keywords
 * @property string $description
 * @property string $title
 * @property string $content
 * @property string $url
 */
class PagesModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pages';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['keywords', 'description', 'title', 'content', 'url'], 'required'],
            [['content'], 'string'],
            [['keywords', 'description', 'title'], 'string', 'max' => 250],
            [['url'], 'string', 'max' => 100],
            [['url'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'id',
            'keywords' => 'Ключевые слова',
            'description' => 'Краткое описание',
            'title' => 'Заголовок',
            'content' => 'Содержание',
            'url' => 'url',
        ];
    }
}
