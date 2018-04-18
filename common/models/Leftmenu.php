<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "leftmenu".
 *
 * @property int $id
 * @property int $category_id Категория
 * @property string $text текст отображаемый в меню (не обязательно)
 * @property int $sort сортировать
 * @property string $url Ссылка (не обязательно)
 */
class Leftmenu extends \yii\db\ActiveRecord
{

    function behaviors()
    {
        return [
            'images' => [
                'class' => 'dvizh\gallery\behaviors\AttachImages',
                'mode' => 'single',
                'quality' => 60,
                'galleryId' => 'picture'
            ],
        ];
    }
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'leftmenu';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category_id', 'sort'], 'integer'],
            [['text', 'url'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category_id' => 'Категория',
            'text' => 'текст отображаемый в меню (не обязательно)',
            'sort' => 'сортировать',
            'url' => 'Ссылка (не обязательно)',
        ];
    }
}
