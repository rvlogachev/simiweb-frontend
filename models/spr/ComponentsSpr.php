<?php

namespace app\models\spr;

use app\components\SoftDeleteTrait;
use Yii;
use yii\behaviors\TimestampBehavior;
use yii\data\ActiveDataProvider;
use yii\db\Query;
use yii\filters\AccessControl;

/**
 * This is the model class for table "components_spr".
 *
 * @property int $id
 * @property string $component_code
 * @property string|null $en_code
 * @property string $component_name
 * @property string $unit_code
 * @property string|null $group_code
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property string|null $deleted_at
 *
 * @property UnitsSpr $unitCode
 */
class ComponentsSpr extends \yii\db\ActiveRecord
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
        return 'components_spr';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['component_code', 'component_name', 'unit_code'], 'required'],
            [['created_at', 'updated_at', 'deleted_at'], 'safe'],
            [['component_code'], 'string', 'max' => 50],
            [['en_code', 'unit_code', 'group_code','priznak_graph'], 'string', 'max' => 10],
            [['component_name'], 'string', 'max' => 512],
            [['unit_code'], 'exist', 'skipOnError' => true, 'targetClass' => UnitsSpr::className(), 'targetAttribute' => ['unit_code' => 'unit_code']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ИД',
            'component_code' => 'Код компонента',
            'en_code' => 'Краткое наименование на английском',
            'component_name' => 'Наименование компонента',
            'priznak_graph' => 'Признак для отображения на графе',
            'unit_code' => 'Код единицы измерения',
            'group_code' => 'Группировка в плане производства',
            'created_at' => 'Дата создания',
            'updated_at' => 'Дата обновления',
            'deleted_at' => 'Дат пометки на удаление',
        ];
    }
    /**
     * Gets query for [[UnitCode]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUnitCode()
    {
        return $this->hasOne(UnitsSpr::className(), ['unit_code' => 'unit_code']);
    }
    public static function findByParams($search = null,
                                        $trashed_button = null, $component_code = null, $en_code = null,
                                        $component_name = null, $unit_code = null, $priznak_graph = null,
                                        $group_code = null)
    {
        $query = (new Query())
            ->select('
            components_spr.id,
            components_spr.component_code,
            components_spr.en_code,
            components_spr.component_name,
            components_spr.priznak_graph,
            components_spr.unit_code,
            components_spr.group_code, 
            components_spr.created_at,
            components_spr.updated_at,
            components_spr.deleted_at')
            ->from('components_spr');

        if (!empty($search)) {
            $query->andWhere(['like', 'lower(components_spr.component_name)', strtolower($search)])
                ->orWhere(['like', 'upper(components_spr.component_name)', strtoupper($search)])
                ->orWhere(['like', 'components_spr.component_name', $search])
                ->orWhere(['like', 'components_spr.component_code', $search])
                ->orWhere(['like', 'upper(components_spr.component_code)', strtoupper($search)])
                ->orWhere(['like', 'lower(components_spr.component_code)', strtolower($search)])
                ->orWhere(['like', 'components_spr.en_code', $search])
                ->orWhere(['like', 'upper(components_spr.en_code)', strtoupper($search)])
                ->orWhere(['like', 'lower(components_spr.en_code)', strtolower($search)])
                ->orWhere(['like', 'components_spr.priznak_graph', $search])
                ->orWhere(['like', 'upper(components_spr.priznak_graph)', strtoupper($search)])
                ->orWhere(['like', 'lower(components_spr.priznak_graph)', strtolower($search)])
                ->orWhere(['like', 'components_spr.unit_code', $search])
                ->orWhere(['like', 'upper(components_spr.unit_code)', strtoupper($search)])
                ->orWhere(['like', 'lower(components_spr.unit_code)', strtolower($search)])
                ->orWhere(['like', 'upper(components_spr.group_code)', strtoupper($search)])
                ->orWhere(['like', 'components_spr.group_code', $search])
                ->orWhere(['like', 'lower(components_spr.group_code)', strtolower($search)]);

        }

        if ($trashed_button == 'true') {
        } else {
            $query->andWhere([ 'components_spr.deleted_at' => null]);
        }
        if ($component_code ) {
            $query->andWhere(['like', 'components_spr.component_code',  $component_code ]);
        }
        if ($component_name ) {
            $query->andWhere(['like', 'components_spr.component_name',  $component_name ]);
        }
        if ($en_code ) {
            $query->andWhere(['like', 'components_spr.en_code',  $en_code ]);
        }
        if ($priznak_graph) {
            $query->andWhere(['like', 'components_spr.priznak_graph',  $priznak_graph ]);
        }
        if ($unit_code ) {
            $query->andWhere(['like', 'components_spr.unit_code',  $unit_code ]);
        }
        if ($group_code ) {
            $query->andWhere(['like', 'components_spr.group_code',  $group_code ]);
        }
        $query->orderBy('components_spr.component_name ASC');

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
            ->select('component_code, en_code, component_name, priznak_graph, unit_code, group_code ')
            ->from('components_spr')
            ->orderBy('component_name')
            ->where(['deleted_at' => null])
            ->all();
        return $pairs;
    }

    public static function getUnitCodes()
    {
        $pairs = (new Query())
            ->select('unit_code')
            ->distinct(true)
            ->from('components_spr')
            ->where(['deleted_at' => null])
            ->all();
        return $pairs;
    }

    public static function getPriznakGraphs()
    {
        $pairs = (new Query())
            ->select('priznak_graph')
            ->distinct(true)
            ->from('components_spr')
            ->where(['deleted_at' => null])
            ->all();
        return $pairs;
    }

    public static function getGroupCodes()
    {
        $pairs = (new Query())
            ->select('group_code')
            ->distinct(true)
            ->from('components_spr')
            ->where(['deleted_at' => null])
            ->all();
        return $pairs;
    }

    public static function fromArray(array $params = [])
    {
        $components = new static();
        $components->attributes = $params;
        return $components;
    }

    public static function findById($id)
    {
        return static::find()
            ->select('id, component_code, en_code, component_name, priznak_graph, unit_code, group_code, created_at, updated_at, deleted_at')
            ->where('id=:id', ['id' => $id])
            ->asArray()
            ->one();
    }
}
