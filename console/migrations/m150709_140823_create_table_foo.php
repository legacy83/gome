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
            'four' => $this->integer()->defaultValue( 0 ),
            'five' => $this->text()->defaultValue( NULL ),
        ] );
    }

    public function down()
    {
        $this->dropTable( 'foo' );
    }
}