<?php

use yii\db\Migration;

/**
 * Handles the creation of table `leftmenu`.
 */
class m180314_173142_create_leftmenu_table extends Migration
{

    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        if (!$this->tableExists('leftmenu')) {
            $this->createTable('leftmenu', [
                'id' => $this->primaryKey(),
                'category_id' => $this->integer()->null()->comment('Категория'),
                'text' => $this->string()->comment('текст отображаемый в меню (не обязательно)'),
                'sort' => $this->integer()->defaultValue(0)->comment('сортировать'),
                'url' => $this->string()->null()->comment('Ссылка (не обязательно)'),

            ]);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('leftmenu');
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
