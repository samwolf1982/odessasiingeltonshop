<?php

use yii\db\Schema;
use yii\db\Migration;

class m170317_090025_slider extends Migration
{

    public function init()
    {
        $this->db = 'db';
        parent::init();
    }

    public function safeUp()
    {
        if (!$this->tableExists('slider')) {
            $tableOptions = 'ENGINE=InnoDB';

            $this->createTable(
                '{{%slider}}',
                [
                    'id' => $this->primaryKey(11),
                    'url' => $this->string(255)->null()->defaultValue(null),
                    'short_text' => $this->string(255)->null()->defaultValue(null),
                    'sort' => $this->integer(11)->null()->defaultValue(null),
                ], $tableOptions
            );
            $this->createIndex('id', '{{%slider}}', 'id', false);
        }
    }

    public function safeDown()
    {
        $this->dropIndex('id', '{{%slider}}');
        $this->dropTable('{{%slider}}');
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
