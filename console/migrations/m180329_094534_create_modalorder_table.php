<?php

use yii\db\Migration;

/**
 * Handles the creation of table `modalorder`.
 */
class m180329_094534_create_modalorder_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        if (!$this->tableExists('modalorder')) {
        $this->createTable('modalorder', [
            'id' => $this->primaryKey(),
            'phone' => $this->text()->null()->comment('Телефон'),
            'time_user' => $this->text()->null()->comment('Удобное время'),
            'name' => $this->text()->null()->comment('Имя'),
            'email' => $this->text()->null()->comment('Email'),
            'comment' => $this->text()->null()->comment('Коментарий'),

            'status' => $this->integer()->defaultValue(0)->comment('Cтатус'), //обработан или нет
            'sort' => $this->integer()->defaultValue(0)->comment('Cортировать'),
            'time'=>$this->datetime()->notNull()->comment('Время создания, для бекенда'),
        ]);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('modalorder');
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
