<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "category".
 *
 * @property int $id
 * @property int $parent_id
 * @property string $name
 * @property string $keywords
 * @property string $description
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc 
     */
    public static function tableName()
    {
        return 'category';
    }

	public function getProducts(){
		return $this->hasMany(Product::className(), ['category_id' => 'id']);
	}
}