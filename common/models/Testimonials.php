<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "testimonials".
 *
 * @property int $id
 * @property int $id_product Продукт
 * @property string $name Имя
 * @property string $comment Коментарий
 * @property int $status Cтатус
 * @property string $created_at Дата создания
 */
class Testimonials extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'testimonials';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_product', 'status'], 'integer'],
            [['name', 'comment'], 'required'],
            [['comment'], 'string'],
            [['created_at'], 'safe'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_product' => 'Продукт',
            'name' => 'Имя',
            'comment' => 'Коментарий',
            'status' => 'Cтатус',
            'created_at' => 'Дата создания',
        ];
    }
}
