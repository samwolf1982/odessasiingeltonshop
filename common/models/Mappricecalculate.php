<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "mappricecalculate".
 *
 * @property int $id
 * @property int $distance_from растояние от
 * @property int $distance_to растояние до
 * @property string $min_sum минимальная сумма заказа
 * @property string $delivery_sum цена доставки
 * @property string $delivery_free_sum от какой суммы будет бестплатная доставка
 * @property int $sort растояние от
 */
class Mappricecalculate extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mappricecalculate';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['distance_from', 'distance_to', 'sort'], 'integer'],
            [['min_sum', 'delivery_sum', 'delivery_free_sum'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'distance_from' => 'растояние от',
            'distance_to' => 'растояние до',
            'min_sum' => 'минимальная сумма заказа',
            'delivery_sum' => 'цена доставки',
            'delivery_free_sum' => 'от какой суммы будет бестплатная доставка',
            'sort' => 'растояние от',
        ];
    }
}
