<?php

use yii\db\Migration;

/**
 * Handles the creation of table `wishlist`.
 */
class m180329_143524_create_wishlist_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        if (!$this->tableExists('wishlist')) {
        $this->createTable('wishlist', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull()->comment('Ид пользователя или временное ид отрицательное'),
            'product_id' => $this->integer()->notNull()->comment('Ид товара'),
            'model' => $this->string()->notNull()->comment('модель'),
            'options' => $this->string()->notNull()->comment('модель'),
            'created_at' => $this->datetime()->notNull()->comment('Время создания, для бекенда'),
        ]);
    }
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('wishlist');
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
