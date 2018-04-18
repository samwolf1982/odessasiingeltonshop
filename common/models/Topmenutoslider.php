<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "topmenutoslider".
 *
 * @property int $id
 * @property int $category_id Категория
 * @property int $sort сортировать
 */
class Topmenutoslider extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'topmenutoslider';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category_id'], 'required'],
            [['category_id', 'sort'], 'integer'],
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
            'sort' => 'сортировать',
        ];
    }
}
