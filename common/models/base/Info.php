<?php

namespace common\models\base;

use Yii;

/**
 * This is the model class for table "tool_info".
 *
 * @property int $id
 * @property string $name 名称
 * @property string $icon 图标
 * @property string $description 描述
 * @property string $url 链接
 * @property int $type 类别
 * @property string $note 备注
 */
class Info extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tool_info';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'icon'], 'required'],
            [['type'], 'integer'],
            [['name', 'icon', 'description', 'url', 'note'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => '名称',
            'icon' => '图标',
            'description' => '描述',
            'url' => '链接',
            'type' => '类别',
            'note' => '备注',
        ];
    }
}
