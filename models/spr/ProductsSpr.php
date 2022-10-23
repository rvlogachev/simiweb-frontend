<?php

namespace app\models\spr;

use app\components\SoftDeleteTrait;
use Yii;
use yii\data\ActiveDataProvider;
use yii\db\Query;

/**
 * This is the model class for table "products_spr".
 *
 * @property int $id
 * @property string $product_code
 * @property string $business_org_code
 * @property string $production_unit_code
 * @property string $redev_code
 * @property string|null $redev
 * @property string $product_name_sap
 * @property string|null $product_name
 * @property string|null $zavod_code
 * @property string|null $node_type
 * @property string $is_cost_product
 * @property string|null $is_fix_content
 * @property string|null $fix_component_code
 * @property string|null $product_type
 * @property string|null $product_for
 * @property float|null $coeff_minus
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property string|null $deleted_at
 * @property BusinessOrgsSpr $businessOrgCode
 * @property ProductionUnitsSpr $productionUnitCode
 * @property RedevsSpr $redevCode
 */
class ProductsSpr extends \yii\db\ActiveRecord
{
    use SoftDeleteTrait;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'products_spr';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['product_code', 'business_org_code', 'production_unit_code', 'redev_code', 'product_name_sap', 'is_cost_product'], 'required'],
            [[  'coeff_minus'], 'number', 'min'=> 0],

            [['created_at', 'updated_at', 'deleted_at'], 'safe'],
            [['product_code', 'production_unit_code'], 'string', 'max' => 20],
            [['business_org_code'], 'string', 'max' => 4],

            [['redev_code', 'product_type'], 'string', 'max' => 50],
            [['product_name_sap', 'node_name'], 'string', 'max' => 512],
            [['zavod_code', 'redev', 'is_cost_product', 'is_fix_content', 'fix_component_code',   'product_for'], 'string', 'max' => 10],
            [['node_type'], 'string', 'max' => 1],

            [['product_code'], 'unique'],
            [['business_org_code'], 'exist', 'skipOnError' => true, 'targetClass' => BusinessOrgsSpr::className(), 'targetAttribute' => ['business_org_code' => 'business_org_code']],
            [['production_unit_code'], 'exist', 'skipOnError' => true, 'targetClass' => ProductionUnitsSpr::className(), 'targetAttribute' => ['production_unit_code' => 'production_unit_code']],
            [['fix_component_code'], 'exist', 'skipOnError' => true, 'targetClass' => ComponentsSpr::className(), 'targetAttribute' => ['fix_component_code' => 'component_code']],
            [['redev_code'], 'exist', 'skipOnError' => true, 'targetClass' => RedevsSpr::className(), 'targetAttribute' => ['redev_code' => 'node_code']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ИД продукта',
            'product_code' => 'Код продукта',
            'business_org_code' => 'Код БЕ',
            'production_unit_code' => 'Код ПЕ',
            'zavod_code' => 'Код завода',
            'redev_code' => 'Код передела',
            'redev' => 'Передел',
            'node_type' => 'Тип вершины',
            'is_cost_product' => 'Товарный продукт',
            'is_fix_content' => 'Фиксированное содержание',
            'fix_component_code' => 'Код компонента, по которому фиксировано содержание',
            'product_type' => 'Тип продукта',
            'product_for' => 'Продукт для',
            'product_name_sap' => 'Наименование продукта в SAP',
            'node_name' => 'Наименование продукта в модели',
            'coeff_minus' => 'Понижающий коэффициент',
            'created_at' => 'Дата создания',
            'updated_at' => 'Дата обновления',
            'deleted_at' => 'Дата удаления',
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
    public function getProductionUnitCode()
    {
        return $this->hasOne(ProductionUnitsSpr::className(), ['production_unit_code' => 'production_unit_code']);
    }

    public function getComponentName()
    {
        return $this->hasOne(ComponentsSpr::className(), ['fix_component_code' => 'code']);
    }

    public function getRedevCode()
    {
        return $this->hasOne(RedevsSpr::className(), ['node_code' => 'redev_code']);
    }
    public static function findByParams($search = null, $trashed_button = null, $business_org_code = null,
        $production_unit_code = null, $zavod_code = null, $redev_code = null, $is_cost_product = null )
    {
        $query = (new Query())
            ->select('products_spr.id, products_spr.product_code, products_spr.business_org_code, products_spr.production_unit_code, 
            products_spr.product_name_sap,  
            products_spr.zavod_code, products_spr.redev_code, products_spr.node_type, products_spr.is_cost_product,
            products_spr.is_fix_content, products_spr.fix_component_code, 
            products_spr.product_type, products_spr.product_for, products_spr.node_name, products_spr.coeff_minus,
           products_spr.created_at, products_spr.updated_at, products_spr.deleted_at')
            ->from('products_spr');

        if (!empty($search)) {
            $query->andWhere(['like', 'lower(products_spr.node_name)', strtolower($search)])
                ->orWhere(['like', 'upper(products_spr.node_name)', strtoupper($search)])
                ->orWhere(['like', 'products_spr.node_name', $search])

                ->orWhere(['like', 'products_spr.business_org_code', $search])
                ->orWhere(['like', 'upper(products_spr.business_org_code)', strtoupper($search)])
                ->orWhere(['like', 'lower(products_spr.business_org_code)', strtolower($search)])

                ->orWhere(['like', 'products_spr.production_unit_code', $search])
                ->orWhere(['like', 'upper(products_spr.production_unit_code)', strtoupper($search)])
                ->orWhere(['like', 'lower(products_spr.production_unit_code)', strtolower($search)])

                ->orWhere(['like', 'products_spr.product_code', $search])
                ->orWhere(['like', 'upper(products_spr.product_code)', strtoupper($search)])
                ->orWhere(['like', 'lower(products_spr.product_code)', strtolower($search)])

                ->orWhere(['like', 'products_spr.product_type', $search])
                ->orWhere(['like', 'upper(products_spr.product_type)', strtoupper($search)])
                ->orWhere(['like', 'lower(products_spr.product_type)', strtolower($search)])

                ->orWhere(['like', 'products_spr.zavod_code', $search])
                ->orWhere(['like', 'upper(products_spr.zavod_code)', strtoupper($search)])
                ->orWhere(['like', 'lower(products_spr.zavod_code)', strtolower($search)])

                ->orWhere(['like', 'products_spr.redev_code', $search])
                ->orWhere(['like', 'upper(products_spr.redev_code)', strtoupper($search)])
                ->orWhere(['like', 'lower(products_spr.redev_code)', strtolower($search)])

                ->orWhere(['like', 'products_spr.redev', $search])
                ->orWhere(['like', 'upper(products_spr.redev)', strtoupper($search)])
                ->orWhere(['like', 'lower(products_spr.redev)', strtolower($search)])

                ->orWhere(['like', 'products_spr.is_cost_product', $search])
                ->orWhere(['like', 'upper(products_spr.is_cost_product)', strtoupper($search)])
                ->orWhere(['like', 'lower(products_spr.is_cost_product)', strtolower($search)])

                ->orWhere(['like', 'products_spr.is_fix_content', $search])
                ->orWhere(['like', 'upper(products_spr.is_fix_content)', strtoupper($search)])
                ->orWhere(['like', 'lower(products_spr.is_fix_content)', strtolower($search)])

                ->orWhere(['like', 'products_spr.fix_component_code', $search])
                ->orWhere(['like', 'upper(products_spr.fix_component_code)', strtoupper($search)])
                ->orWhere(['like', 'lower(products_spr.fix_component_code)', strtolower($search)])

                ->orWhere(['like', 'products_spr.is_fix_content', $search])
                ->orWhere(['like', 'upper(products_spr.is_fix_content)', strtoupper($search)])
                ->orWhere(['like', 'lower(products_spr.is_fix_content)', strtolower($search)])

                ->orWhere(['like', 'products_spr.node_type', $search])
                ->orWhere(['like', 'upper(products_spr.node_type)', strtoupper($search)])
                ->orWhere(['like', 'lower(products_spr.node_type)', strtolower($search)])

                ->orWhere(['like', 'products_spr.product_name_sap', $search])
                ->orWhere(['like', 'upper(products_spr.product_name_sap)', strtoupper($search)])
                ->orWhere(['like', 'lower(products_spr.product_name_sap)', strtolower($search)])

                ->orWhere(['like', 'products_spr.product_for', $search])
                ->orWhere(['like', 'upper(products_spr.product_for)', strtoupper($search)])
                ->orWhere(['like', 'lower(products_spr.product_for)', strtolower($search)]);

        }
        if ($trashed_button != 'true') {
            $query->andWhere([ 'products_spr.deleted_at' => null]);
        }

        if ($business_org_code ) {
            $query->andWhere(['like', 'products_spr.business_org_code',  $business_org_code ]) ;
        }
        if ($production_unit_code ) {
            $query->andWhere(['like', 'products_spr.production_unit_code',  $production_unit_code ]) ;
        }

        if ($zavod_code ) {
            $query->andWhere(['like', 'products_spr.zavod_code',  $zavod_code ]) ;
        }
        if ($redev_code ) {
            $query->andWhere(['like', 'products_spr.redev_code',  $redev_code ]) ;
        }

         if ($is_cost_product =='cost' ) {
            $query->andWhere(['products_spr.is_cost_product' => "да"]) ;
        }elseif ($is_cost_product =='without' ) {
             $query->andWhere(['products_spr.is_cost_product' => "нет"]);
        }



        $query->orderBy('products_spr.node_name ASC');

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
            ->select('id, node_name, business_org_code')
            ->from('products_spr')
            ->orderBy('node_name')
            ->where(['deleted_at' => null])
            ->all();
        return $pairs;
    }

    public static function getBusinessOrgs()
    {
        $pairs = (new Query())
            ->select( 'products_spr.business_org_code, business_orgs_spr.node_name')
            ->distinct(true)
            ->from('products_spr')
            ->leftJoin('business_orgs_spr', 'business_orgs_spr.business_org_code = products_spr.business_org_code')
            ->where(['products_spr.deleted_at' => null])
            ->all();
        return $pairs;
    }

    public static function getProductionUnits()
    {
        $pairs = (new Query())
            ->select( 'products_spr.production_unit_code , production_units_spr.node_name')
            ->distinct(true)
            ->from('products_spr')
            ->leftJoin('production_units_spr', 'production_units_spr.production_unit_code = products_spr.production_unit_code')
            ->where(['products_spr.deleted_at' => null])
            ->all();
        return $pairs;
    }

    public static function getRedevs()
    {
        $pairs = (new Query())
            ->select( 'products_spr.redev_code , redevs_spr.node_name')
            ->distinct(true)
            ->from('products_spr')
            ->leftJoin('redevs_spr', 'redevs_spr.node_code = products_spr.redev_code')
            ->where(['products_spr.deleted_at' => null])
            ->all();
        return $pairs;
    }

    public static function fromArray(array $params = [])
    {
        $product = new static();
        $product->attributes = $params;
        if ($product->is_cost_product == "да") {
            $product->node_type = "R";
        }
        return $product;
    }

    public static function findById($id)
    {
        return static::find()
            ->select('id, product_code, production_unit_code, business_org_code, product_name_sap,  
            zavod_code, redev_code, node_type, is_cost_product, redev,
            is_fix_content, fix_component_code,  
            product_type, product_for, node_name, coeff_minus,
           created_at, updated_at, deleted_at')
            ->where('id=:id', ['id' => $id])
            ->asArray()
            ->one();
    }


}
