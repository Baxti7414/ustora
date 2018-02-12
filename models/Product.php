<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property int $id
 * @property int $parent_id
 * @property string $name
 * @property string $keywords
 * @property string $description
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc 
     */
    public static function tableName()
    {
        return 'product';
    }

	public function getCategory(){
		return $this->hasOne(Category::className(), ['id' => 'category_id']);
	}
}