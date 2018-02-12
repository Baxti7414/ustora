<?php

use yii\db\Migration;

/**
 * Handles the creation of table `product`.
 */
class m180212_125607_create_product_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('product', [
            'id' => $this->primaryKey(),
            'category_id' => $this->integer(),
            'name' => $this->string()->notNull(),
            'content' => $this->text(),
            'price' => $this->float(),
            'keywords' => $this->string(),
            'description' => $this->string(),
            'img' => $this->string(),
            'hit' => "ENUM('0', '1')",
            'new' => "ENUM('0','1')",
            'sale' => "ENUM('0','1')",
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('product');
    }
}
