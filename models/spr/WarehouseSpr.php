<?php

namespace app\models\spr;

use app\components\SoftDeleteTrait;
use Yii;
use yii\behaviors\TimestampBehavior;
use yii\data\ActiveDataProvider;
use yii\db\Query;
use yii\filters\AccessControl;

/**
 * This is the model class for table "warehouse_spr".
 *
 * @property int $id
 * @property string $storage_code
 * @property string|null $storage_type
 * @property string $node_name
 * @property string $node_code
 * @property int|null $is_stopped
 * @property string|null $product_enter_storage
 * @property int|null $is_storage_general
 * @property float|null $storage_max_volume
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property string|null $deleted_at
 */
class WarehouseSpr extends \yii\db\ActiveRecord
{
    use SoftDeleteTrait;


    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::class,
                'value' => date('Y-m-d H:i:s')
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'warehouse_spr';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['storage_code', 'node_name', 'node_code'], 'required'],
            [['is_storage_general', 'is_stopped'], 'default', 'value' => null],
            [['is_storage_general', 'is_stopped'], 'integer'],
            [['storage_max_volume'], 'number', 'min' => 0],
            [['created_at', 'updated_at', 'deleted_at'], 'safe'],
            [['storage_code'], 'string', 'max' => 10],
            [['storage_type'], 'string', 'max' => 20],
            [['node_name', 'product_enter_storage'], 'string', 'max' => 512],
            [['node_code'], 'string', 'max' => 50],
            [['storage_code'], 'unique'],

        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ИД',
            'storage_code' => 'Код склада',
            'storage_type' => 'Тип склада',
            'node_name' => 'Наименование склада',
            'node_code' => 'Код вершины',
            'product_enter_storage' => 'Продукт хранящийся на входном складе',
            'is_storage_general' => 'Флаг "склад основной продукции"',
            'storage_max_volume' => 'Максимальный объем склада в тоннах',
            'created_at' => 'Дата создания',
            'updated_at' => 'Дата обновления',
            'deleted_at' => 'Дата пометки на удаление',
        ];
    }

    public static function findByParams($search = null, $trashed = null, $trashed_button = null)
    {
        $query = (new Query())
            ->select('
            warehouse_spr.id,
            warehouse_spr.storage_code,
            warehouse_spr.storage_type,
            warehouse_spr.node_name,
            warehouse_spr.node_code,
            warehouse_spr.product_enter_storage,
            warehouse_spr.is_storage_general,
            warehouse_spr.storage_max_volume,
            warehouse_spr.created_at,
            warehouse_spr.updated_at,
            warehouse_spr.deleted_at')
            ->from('warehouse_spr');

        if (!empty($search)) {
            $query->andWhere(['like', 'warehouse_spr.product_enter_storage', $search])
                ->orWhere(['like', 'lower(warehouse_spr.product_enter_storage)', strtolower($search)])
                ->orWhere(['like', 'upper(warehouse_spr.product_enter_storage)', strtoupper($search)])
                ->orWhere(['like', 'warehouse_spr.storage_type', $search])
                ->orWhere(['like', 'lower(warehouse_spr.storage_type)', strtolower($search)])
                ->orWhere(['like', 'upper(warehouse_spr.storage_type)', strtoupper($search)])
                ->orWhere(['like', 'warehouse_spr.storage_code', $search])
                ->orWhere(['like', 'lower(warehouse_spr.storage_code)', strtolower($search)])
                ->orWhere(['like', 'upper(warehouse_spr.storage_code)', strtoupper($search)])
                ->orWhere(['like', 'warehouse_spr.node_name', $search])
                ->orWhere(['like', 'lower(warehouse_spr.node_name)', strtolower($search)])
                ->orWhere(['like', 'upper(warehouse_spr.node_name)', strtoupper($search)])
                ->orWhere(['like', 'warehouse_spr.node_code', $search])
                ->orWhere(['like', 'lower(warehouse_spr.node_code)', strtolower($search)])
                ->orWhere(['like', 'upper(warehouse_spr.node_code)', strtoupper($search)]);
        }

        if ($trashed_button == 'true') {
        } else {
            $query->andWhere([ 'warehouse_spr.deleted_at' => null]);
        }

        $query->orderBy('warehouse_spr.id ASC');

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 15,
            ],
        ]);

        return $dataProvider;
    }

    /**
     * @return array
     */
    public static function getPairs()
    {
        $pairs = (new Query())
            ->select('id, storage_code, node_name')
            ->from('warehouse_spr')
            ->orderBy('id')
            ->where(['deleted_at' => null])
            ->all();
        return $pairs;
    }

    public static function fromArray(array $params = [])
    {
        $warehouse = new static();
        $warehouse->attributes = $params;
        return $warehouse;
    }

    public static function findById($id)
    {
        return static::find()
            ->select('id, storage_type, node_name, node_code, storage_code,  product_enter_storage, is_storage_general, storage_max_volume, created_at, updated_at, deleted_at')
            ->where('id=:id', ['id' => $id])
            ->asArray()
            ->one();
    }
}
