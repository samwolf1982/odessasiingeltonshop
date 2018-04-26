<?php

namespace common\models;

use Yii;


/**
 * This is the model class for table "mappricecalculate".
 *
 * @property int $id
 * @property int $distance_from
 * @property int $distance_to
 * @property string $min_sum
 * @property int $sort
 *
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
            [['min_sum'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     *
     * 1	0	2000	250.0000	0
    *2	2000	5000	300.0000	0
    *3	5000	9000	350.0000	0
    *4	9000	11000	400.0000	0
   * 5	11000	14000	600.0000	0
     *
     *
     *
     *
     *
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'distance_from' => 'Distance From',
            'distance_to' => 'Distance To',
            'min_sum' => 'Min Sum',
            'sort' => 'Sort',
        ];
    }
}
