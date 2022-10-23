<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "production_plans_initial_nzp".
 *
 * @property int $id
 * @property int $metaload_dataset_id
 * @property string|null $node_code
 * @property string|null $node_name
 * @property int|null $year
 * @property string|null $component_code
 * @property string|null $unit_code
 * @property string|null $unit_name
 * @property int|null $initial_nzp
 * @property string|null $content_unit_code
 * @property string|null $content_unit_name
 * @property float|null $content
 */
class ProductionPlansInitialNzp extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'production_plans_initial_nzp';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['metaload_dataset_id'], 'required'],
            [['metaload_dataset_id', 'year', 'initial_nzp'], 'default', 'value' => null],
            [['metaload_dataset_id', 'year', 'initial_nzp'], 'integer'],
            [['content'], 'number'],
            [['node_code'], 'string', 'max' => 50],
            [['node_name', 'unit_name', 'content_unit_name'], 'string', 'max' => 512],
            [['component_code', 'unit_code', 'content_unit_code'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'metaload_dataset_id' => 'Metaload Dataset ID',
            'node_code' => 'Node Code',
            'node_name' => 'Node Name',
            'year' => 'Year',
            'component_code' => 'Component Code',
            'unit_code' => 'Unit Code',
            'unit_name' => 'Unit Name',
            'initial_nzp' => 'Initial Nzp',
            'content_unit_code' => 'Content Unit Code',
            'content_unit_name' => 'Content Unit Name',
            'content' => 'Content',
        ];
    }
}
