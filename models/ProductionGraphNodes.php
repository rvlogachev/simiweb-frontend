<?php

namespace app\models;

use app\models\spr\BusinessOrgsSpr;
use app\models\spr\ProductionUnitsSpr;
use Yii;

/**
 * This is the model class for table "production_graph_nodes".
 *
 * @property int $id
 * @property int $metaload_dataset_id
 * @property string $node_code
 * @property string $business_org_code
 * @property string|null $business_org_name
 * @property string $production_unit_code
 * @property string|null $production_unit_name
 * @property int|null $year
 * @property string $node_type
 * @property float|null $coord_x
 * @property float|null $coord_y
 * @property int|null $level
 * @property string|null $redev_code
 * @property string|null $redev_name
 * @property string|null $tag_alternative
 * @property string|null $target_node_code
 * @property int|null $period
 * @property int|null $delay_time
 * @property float|null $max_power
 * @property float|null $nzp_max_volume
 *
 * @property BusinessOrgsSpr $businessOrgCode
 * @property ProductionUnitsSpr $productionUnitCode
 * @property UploadFiles $metaloadDataset
 */
class ProductionGraphNodes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'production_graph_nodes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['metaload_dataset_id', 'node_code', 'business_org_code', 'production_unit_code', 'node_type'], 'required'],
            [['metaload_dataset_id', 'year', 'level', 'period', 'delay_time'], 'default', 'value' => null],
            [['metaload_dataset_id', 'year', 'level', 'period', 'delay_time'], 'integer'],
            [['coord_x', 'coord_y', 'max_power', 'nzp_max_volume'], 'number'],
            [['node_code', 'redev_code'], 'string', 'max' => 50],
            [['business_org_code'], 'string', 'max' => 4],
            [['business_org_name', 'redev_name'], 'string', 'max' => 512],
            [['production_unit_code', 'production_unit_name', 'tag_alternative', 'target_node_code'], 'string', 'max' => 10],
            [['node_type'], 'string', 'max' => 1],
            [['business_org_code'], 'exist', 'skipOnError' => true, 'targetClass' => BusinessOrgsSpr::className(), 'targetAttribute' => ['business_org_code' => 'business_org_code']],
            [['production_unit_code'], 'exist', 'skipOnError' => true, 'targetClass' => ProductionUnitsSpr::className(), 'targetAttribute' => ['production_unit_code' => 'production_unit_code']],
            [['metaload_dataset_id'], 'exist', 'skipOnError' => true, 'targetClass' => UploadFiles::className(), 'targetAttribute' => ['metaload_dataset_id' => 'id']],
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
            'business_org_code' => 'Business Org Code',
            'business_org_name' => 'Business Org Name',
            'production_unit_code' => 'Production Unit Code',
            'production_unit_name' => 'Production Unit Name',
            'year' => 'Year',
            'node_type' => 'Node Type',
            'coord_x' => 'Coord X',
            'coord_y' => 'Coord Y',
            'level' => 'Level',
            'redev_code' => 'Redev Code',
            'redev_name' => 'Redev Name',
            'tag_alternative' => 'Tag Alternative',
            'target_node_code' => 'Target Node Code',
            'period' => 'Period',
            'delay_time' => 'Delay Time',
            'max_power' => 'Max Power',
            'nzp_max_volume' => 'Nzp Max Volume',
        ];
    }

    /**
     * Gets query for [[BusinessOrgCode]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBusinessOrgCode()
    {
        return $this->hasOne(BusinessOrgsSpr::className(), ['business_org_code' => 'business_org_code']);
    }

    /**
     * Gets query for [[ProductionUnitCode]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProductionUnitCode()
    {
        return $this->hasOne(ProductionUnitsSpr::className(), ['production_unit_code' => 'production_unit_code']);
    }

    /**
     * Gets query for [[MetaloadDataset]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMetaloadDataset()
    {
        return $this->hasOne(UploadFiles::className(), ['id' => 'metaload_dataset_id']);
    }
}
