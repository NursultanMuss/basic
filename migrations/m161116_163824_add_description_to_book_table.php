<?php

use yii\db\Schema;
use yii\db\Migration;

class m161116_163824_add_description_to_book_table extends Migration
{
    public function up()
    {
        $this->addColumn('{{%books}}', 'book_descrip', Schema::TYPE_STRING.'(256)');
    }

    public function down()
    {
        $this->dropColumn('{{%books}}', 'book_descrip');
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
