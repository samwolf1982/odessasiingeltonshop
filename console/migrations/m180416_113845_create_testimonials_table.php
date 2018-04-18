<?php

use yii\db\Migration;

/**
 * Handles the creation of table `testimonials`.
 */
class m180416_113845_create_testimonials_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        if (!$this->tableExists('testimonials')) {
            $this->createTable('testimonials', [
                'id' => $this->primaryKey(),
                'id_product' => $this->integer()->defaultValue(0)->comment('Продукт'),
                'name' => $this->string()->notNull()->comment('Имя'),
                'comment' => $this->text()->notNull()->comment('Коментарий'),
                'status' => $this->integer()->defaultValue(0)->comment('Cтатус'), // 0-1 не актив актив
                'created_at'=>$this->dateTime()->comment('Дата создания'),

            ]);

            $faker = Faker\Factory::create();
            $p=[];


            $rows = (new \yii\db\Query())
                ->select(['id'])
                ->from('shop_product')
                ->where(1)->all();

            foreach ($rows as $row) {

//                var_dump($row['id']); die();


                foreach ( range(1,5) as $k=>$v){
                    //  $dt=$faker->dateTimeBetween("-1 years","+1 years");
                    $p[]= [$row['id'], $faker->name(), $faker->realText(),date ("Y-m-d H:i:s"),1
                        // $faker->numberBetween(1,10000),$faker->numberBetween(1,50000),$faker->numberBetween(1,50000), date ("Y-m-d H:i:s", $dt->getTimestamp() ),'Результат игры (не обязательно)'
                    ];
                }
      }



            $this->batchInsert('testimonials',['id_product','name','comment','created_at','status'],$p);

//            $this->createTable('testimonials', [
//                'id' => $this->primaryKey(),
//                'user_id' => $this->integer()->notNull()->comment('Ид пользователя или временное ид отрицательное'),
//                'product_id' => $this->integer()->notNull()->comment('Ид товара'),
//                'model' => $this->string()->notNull()->comment('модель'),
//                'options' => $this->string()->notNull()->comment('модель'),
//                'created_at' => $this->datetime()->notNull()->comment('Время создания, для бекенда'),
//            ]);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {

        $this->dropTable('testimonials');
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
