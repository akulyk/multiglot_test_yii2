<?php

use yii\db\Migration;

class m171101_154354_add_author_table extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%author}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull()->unique(),
            'birthday' => $this->string(20)->notNull(),


        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%author}}');
    }
}
