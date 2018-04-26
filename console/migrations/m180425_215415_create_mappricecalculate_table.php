<?php

use yii\db\Migration;

/**
 * Handles the creation of table `mappricecalculate`.
 */
class m180425_215415_create_mappricecalculate_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        if (!$this->tableExists('mappricecalculate')) {
            $this->createTable('mappricecalculate', [
                'id' => $this->primaryKey(),
                'distance_from' => $this->integer()->defaultValue(0)->comment('растояние от'),
                'distance_to' => $this->integer()->defaultValue(0)->comment('растояние до'),
                'min_sum' => $this->money()->defaultValue(0)->comment('минимальная сумма заказа'),
                'delivery_sum' => $this->money()->defaultValue(0)->comment('цена доставки'),
                'delivery_free_sum' => $this->money()->defaultValue(0)->comment('от какой суммы будет бестплатная доставка'),
                'sort' => $this->integer()->defaultValue(0)->comment('растояние от'),
            ]);



            $p=[];


            $p[]= [0,2000,250,50,       300, 0];
            $p[]= [2000,5000,300,60,    350 ,0];
            $p[]= [5000,9000,350,70,    400, 0];
            $p[]= [9000,11000,400,80,   450, 0];
            $p[]= [11000,14000,600,90,  700, 0];

            $this->batchInsert('mappricecalculate',['distance_from','distance_to','min_sum','delivery_sum','delivery_free_sum','sort'],$p);


        }
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('mappricecalculate');
    }


    private function tableExists($tableName, $db = null)
    {
        if ($db)
            $dbConnect = \Yii::$app->get($db);
        else
            $dbConnect = \Yii::$app->get('db');

        if (!($dbConnect instanceof \yii\db\Connection))
            throw new \yii\base\InvalidParamException;

        return in_array($tableName, $dbConnect->schema->getTableNames());
    }
}
