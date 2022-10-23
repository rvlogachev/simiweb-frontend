<?php

namespace common\modules\management\models;

use Yii;

/**
 * This is the model class for table "management_site".
 *
 * @property int $id
 * @property int $created_by
 * @property int $updated_by
 * @property string $active
 * @property string $def
 * @property int $priority
 * @property string $code
 * @property string $name
 * @property string $server_name
 * @property string $description
 * @property int $image_id
 * @property int $is_default
 * @property int $status
 * @property int $created_at
 * @property int $updated_at
 */
class ManagementSite extends  ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'management_site';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['created_by', 'updated_by',   'priority', 'image_id', 'is_default', 'status', 'created_at', 'updated_at'], 'integer'],
            [['code', 'name'], 'required'],
            [['active', 'def'], 'string', 'max' => 1],
            [['code'], 'string', 'max' => 15],
            [['name', 'server_name', 'description'], 'string', 'max' => 255],
            [['code'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
            'active' => 'Active',
            'def' => 'Def',
            'priority' => 'Priority',
            'code' => 'Code',
            'name' => 'Name',
            'server_name' => 'Server Name',
            'description' => 'Description',
            'image_id' => 'Image ID',
            'is_default' => 'Is Default',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\modules\management\models\query\ManagementSiteQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\modules\management\models\query\ManagementSiteQuery(get_called_class());
    }
}
