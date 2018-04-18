<?php

namespace common\models;

use Yii;


/**
 * This is the model class for table "modalorder".
 *
 * @property int $id
 * @property string $phone Телефон
 * @property string $time_user Удобное время
 * @property string $name Имя
 * @property string $email Email
 * @property string $comment Коментарий
 * @property int $status Cтатус
 * @property int $sort Cортировать
 * @property string $time Время создания, для бекенда
 */
class Modalorder extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'modalorder';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['phone', 'time_user', 'name', 'email', 'comment'], 'string'],
            [['status', 'sort'], 'integer'],
            [['time'], 'required'],
            [['time'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'phone' => 'Телефон',
            'time_user' => 'Удобное время',
            'name' => 'Имя',
            'email' => 'Email',
            'comment' => 'Коментарий',
            'status' => 'Cтатус',
            'sort' => 'Cортировать',
            'time' => 'Время создания',
        ];
    }


}
