<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "wishlist".
 *
 * @property int $id
 * @property int $user_id Ид пользователя или временное ид отрицательное
 * @property int $product_id Ид товара
 * @property string $model модель
 * @property string $options модель
 * @property string $created_at Время создания, для бекенда
 */
class Wishlist extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'wishlist';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'product_id', 'model', 'options', 'created_at'], 'required'],
            [['user_id', 'product_id'], 'integer'],
            [['created_at'], 'safe'],
            [['model', 'options'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'Ид пользователя или временное ид отрицательное',
            'product_id' => 'Ид товара',
            'model' => 'модель',
            'options' => 'модель',
            'created_at' => 'Время создания, для бекенда',
        ];
    }
}
