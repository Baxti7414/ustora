<?php

use yii\db\Migration;

/**
 * Handles the creation of table `category`.
 */
class m180212_125122_create_category_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('category', [
            'id' => $this->primaryKey(),
            'parent_id' => $this->integer(),
            'name' => $this->string()->notNull(),
            'keywords' => $this->string(),
            'description' => $this->string(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('category');
    }
}
