<?php

use yii\db\Migration;

/**
 * Handles the creation of table `topmenutoslider`.
 */
class m180316_213346_create_topmenutoslider_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        if (!$this->tableExists('topmenutoslider')) {
            $this->createTable('topmenutoslider', [
                'id' => $this->primaryKey(),
                'category_id' => $this->integer()->notNull()->comment('Категория'),
                'sort' => $this->integer()->defaultValue(0)->comment('сортировать'),
            ]);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('topmenutoslider');
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
