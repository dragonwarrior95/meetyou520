<?php

namespace common\models\base;

use Yii;

/**
 * This is the model class for table "tool_category".
 *
 * @property int $id
 * @property string $name 类名
 * @property string $rote 页面
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tool_category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'rote'], 'required'],
            [['name', 'rote'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => '类名',
            'rote' => '页面',
        ];
    }
}
