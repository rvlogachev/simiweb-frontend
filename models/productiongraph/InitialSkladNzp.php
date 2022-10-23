<?php

namespace app\models\productiongraph;

use Yii;
use app\models\productiongraph\Node;

/**
 * This is the model class for table "production_graph_initial_sklad_nzp".
 *
 * @property int $id
 * @property int $metaload_dataset_id
 * @property string|null $node_code
 * @property int|null $node_name
 * @property string|null $storage_code
 * @property int|null $year
 * @property int|null $initial_volume
 * @property int|null $initial_nzp
 * @property float|null $content_ni
 * @property float|null $content_cu
 * @property float|null $content_co
 * @property float|null $content_s
 * @property float|null $content_pt
 * @property float|null $content_pd
 * @property float|null $content_rh
 * @property float|null $content_ir
 * @property float|null $content_ru
 * @property float|null $content_s_mpg
 * @property float|null $content_au
 * @property float|null $content_ag
 */
class InitialSkladNzp extends \yii\db\ActiveRecord
{

    public static $dataset_id = NULL;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'production_graph_initial_sklad_nzp';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['metaload_dataset_id'], 'required'],
            [['metaload_dataset_id', 'node_name', 'year', 'initial_volume', 'initial_nzp'], 'default', 'value' => null],
            [['metaload_dataset_id', 'year', 'initial_volume', 'initial_nzp'], 'integer'],
            [['content_ni', 'content_cu', 'content_co', 'content_s', 'content_pt', 'content_pd', 'content_rh', 'content_ir', 'content_ru', 'content_s_mpg', 'content_au', 'content_ag'], 'number'],
            [['node_code', 'node_name'], 'string', 'max' => 12],
            [['storage_code'], 'string', 'max' => 10],
            [
                'node_code', 'exist',
                'targetClass' => Node::className(),
                'targetAttribute' => 'node_code',
                'filter' => ['metaload_dataset_id' => self::$dataset_id],
                'message' => 'Trying to write InitialSkladNzp when Node with this node_code is absent in file'
            ],
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
            'storage_code' => 'Storage Code',
            'year' => 'Year',
            'initial_volume' => 'Initial Volume',
            'initial_nzp' => 'Initial Nzp',
            'content_ni' => 'Content Ni',
            'content_cu' => 'Content Cu',
            'content_co' => 'Content Co',
            'content_s' => 'Content S',
            'content_pt' => 'Content Pt',
            'content_pd' => 'Content Pd',
            'content_rh' => 'Content Rh',
            'content_ir' => 'Content Ir',
            'content_ru' => 'Content Ru',
            'content_s_mpg' => 'Content S Mpg',
            'content_au' => 'Content Au',
            'content_ag' => 'Content Ag',
        ];
    }

    /**
     * @param array $params
     * @return InitialSkladNzp
     */
    public static function fromArray(array $params = [])
    {
        $node = new static();
        $node->attributes = $params;
        return $node;
    }
}
