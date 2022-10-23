<?php

namespace app\models\spr;

use app\components\SoftDeleteTrait;
use Yii;
use yii\data\ActiveDataProvider;
use yii\db\Query;

/**
 * This is the model class for table "transfer_base_spr".
 *
 * @property int $id
 * @property string|null $node_code
 * @property string|null $node_type
 * @property string|null $business_org_code
 * @property string|null $production_unit_code
 * @property string|null $name
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property string|null $deleted_at
 */
class TransferBaseSpr extends \yii\db\ActiveRecord
{
    use SoftDeleteTrait;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'transfer_base_spr';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['created_at', 'updated_at', 'deleted_at'], 'safe'],
            [['node_code', 'name'], 'string', 'max' => 50],
            [['node_type'], 'string', 'max' => 1],
            [['business_org_code'], 'string', 'max' => 4],
            [['production_unit_code'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'node_code' => 'Node Code',
            'node_type' => 'Node Type',
            'business_org_code' => 'Business Org Code',
            'production_unit_code' => 'Production Unit Code',
            'name' => 'Name',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'deleted_at' => 'Deleted At',
        ];
    }

    public static function findByParams($search = null, $trashed = null )
    {
        $query = (new Query())
            ->select('transfer_base_spr.id, transfer_base_spr.node_code, transfer_base_spr.node_type, 
            transfer_base_spr.production_unit_code, 
            transfer_base_spr.business_org_code,  
            transfer_base_spr.name,  
            transfer_base_spr.created_at, transfer_base_spr.updated_at, transfer_base_spr.deleted_at')
            ->from('transfer_base_spr');

        if (!empty($search)) {
            $query->andWhere(['like', 'lower(transfer_base_spr.name)', strtolower($search)])
                ->orWhere(['like', 'upper(transfer_base_spr.name)', strtoupper($search)])
                ->orWhere(['like', 'transfer_base_spr.business_org_code', $search]) ;

        }


        if ($trashed === 'with') {
        } elseif ($trashed === 'only') {
            $query->andWhere(['not', ['transfer_base_spr.deleted_at' => null]]);
        } else {
            $query->andWhere(['transfer_base_spr.deleted_at' => null]);
        }

        $query->orderBy('transfer_base_spr.name ASC');

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
            ->select('id, name, business_org_code')
            ->from('transfer_base_spr')
            ->orderBy('name')
            ->where(['deleted_at' => null])
            ->all();
        return $pairs;
    }

    public static function fromArray(array $params = [])
    {
        $business_orgs = new static();
        $business_orgs->attributes = $params;
        return $business_orgs;
    }

    public static function findById($id)
    {
        return static::find()
            ->select('id, name, business_org_code,   name, created_at, updated_at, deleted_at')
            ->where('id=:id', ['id' => $id])
            ->asArray()
            ->one();
    }
}
