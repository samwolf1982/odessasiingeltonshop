<?php

use yii\db\Schema;
use yii\db\Migration;

class m170317_090234_page extends Migration
{

    public function init()
    {
        $this->db = 'db';
        parent::init();
    }

    public function safeUp()
    {
        if (!$this->tableExists('page')) {
            $tableOptions = 'ENGINE=InnoDB';

            $this->createTable(
                '{{%page}}',
                [
                    'id' => $this->primaryKey(11),
                    'show_page' => $this->string()->notNull()->defaultValue('No'),
                    'slug' => $this->string(255)->notNull(),
                    'title' => $this->string(255)->notNull(),
                    'text' => $this->text()->notNull(),
                ], $tableOptions
            );
        }
    }

    public function safeDown()
    {
        $this->dropTable('{{%page}}');
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
