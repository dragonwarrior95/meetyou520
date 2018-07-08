<?php

namespace common\models\base;

use Yii;

/**
 * This is the model class for table "tool_info".
 *
 * @property string $name 名称
 * @property string $icon 图标
 * @property string $description 描述
 * @property string $url 链接
 * @property int $type 0 默认 1开发类 2：其他
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
            'name' => '名称',
            'icon' => '图标',
            'description' => '描述',
            'url' => '链接',
            'type' => '0 默认 1开发类 2：其他',
            'note' => '备注',
        ];
    }
}
