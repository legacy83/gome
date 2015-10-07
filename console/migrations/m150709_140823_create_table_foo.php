<?php

use yii\db\Schema;
use yii\db\Migration;

class m150709_140823_create_table_foo extends Migration
{
    public function up()
    {
        $this->createTable( 'foo', [
            'id' => $this->primaryKey(),
            'one' => $this->string()->notNull(),
            'two' => $this->string()->notNull(),
            'three' => $this->string()->notNull(),
            'four' => $this->string(),
            'five' => $this->text(),
        ] );
    }

    public function down()
    {
        $this->dropTable( 'foo' );
    }
}