<?php

use yii\db\Schema;
use yii\db\Migration;

class m170317_090004_news extends Migration
{

    public function init()
    {
        $this->db = 'db';
        parent::init();
    }

    public function safeUp()
    {


        if (!$this->tableExists('news')){


        $tableOptions = 'ENGINE=InnoDB';

        $this->createTable(
            '{{%news}}',
            [
                'id'=> $this->primaryKey(11),
                'title'=> $this->string(255)->notNull(),
                'anons'=> $this->string(300)->notNull(),
                'text'=> $this->text()->notNull(),
                'slug'=> $this->string(255)->notNull(),
                'date'=> $this->datetime()->notNull(),
                'status'=> $this->string()->notNull()->defaultValue('draft'),
            ],$tableOptions
        );
        }
    }

    public function safeDown()
    {
        $this->dropTable('{{%news}}');
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
