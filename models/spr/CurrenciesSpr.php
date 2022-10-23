<?php

namespace app\models\spr;

use app\components\SoftDeleteTrait;
use Yii;
use yii\behaviors\TimestampBehavior;
use yii\data\ActiveDataProvider;
use yii\db\Query;
use yii\filters\AccessControl;

/**
 * This is the model class for table "currencies_spr".
 *
 * @property int $id
 * @property string $code
 * @property string|null $en_code
 * @property int|null $base_currency
 * @property string $name
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property string|null $deleted_at
 */
class CurrenciesSpr extends \yii\db\ActiveRecord
{
    use SoftDeleteTrait;

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
        return 'currencies_spr';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['code', 'name'], 'required'],
            [['units', 'base_currency'], 'default', 'value' => null],
            [['base_currency'], 'integer', 'min' => 0],
            [['units'], 'integer', 'min' => 0],
            [['created_at', 'updated_at', 'deleted_at'], 'safe'],
            [['code', 'en_code'], 'string', 'max' => 10],
            [['name'], 'string', 'max' => 50],
            [['code'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ИД валюты',
            'code' => 'Код валюты',
            'en_code' => 'Код валюты (лат.)',
            'base_currency' => 'Основная валюта',
            'units' => 'Единиц',
            'name' => 'Наименование валюты',
            'created_at' => 'Дата создания',
            'updated_at' => 'Дата обновления',
            'deleted_at' => 'Дата удаления',
        ];
    }

    public static function findByParams($search = null, $trashed = null, $trashed_button = null, $code = null, $en_code = null, $base_currency = null, $name = null)
    {
        $query = (new Query())
            ->select('currencies_spr.id, currencies_spr.code, currencies_spr.units, currencies_spr.en_code, currencies_spr.base_currency, currencies_spr.name,  
            currencies_spr.created_at, currencies_spr.updated_at, currencies_spr.deleted_at')
            ->from('currencies_spr');

        if (!empty($search)) {
            $query->andWhere(['like', 'lower(currencies_spr.name)', strtolower($search)])
                ->orWhere(['like', 'upper(currencies_spr.name)', strtoupper($search)])
                ->orWhere(['like', 'currencies_spr.name', $search])
                ->orWhere(['like', 'currencies_spr.code', $search])
                ->orWhere(['like', 'lower(currencies_spr.en_code)', strtolower($search)])
                ->orWhere(['like', 'upper(currencies_spr.en_code)', strtoupper($search)])
                ->orWhere(['like', 'currencies_spr.en_code', $search]);
                //->orWhere([ 'currencies_spr.base_currency'=> $search]);
//                ->orWhere(['like', 'upper(currencies_spr.short_name)', strtoupper($search)])
//                ->orWhere(['like', 'currencies_spr.short_name', $search])
//                ->orWhere(['like', 'lower(currencies_spr.short_name)', strtolower($search)]);
        }



        if ($trashed_button == 'true') {
        } else {
            $query->andWhere([ 'currencies_spr.deleted_at' => null]);
        }
        if ($code ) {
            $query->andWhere(['like', 'currencies_spr.code',  $code ]);
        }
        if ($en_code ) {
            $query->andWhere(['like', 'currencies_spr.en_code',  $en_code ]) ;
        }

        if ($base_currency ) {
            $query->andWhere(['currencies_spr.base_currency' =>  $base_currency ]) ;
        }

        if ($name ) {
            $query->andWhere(['like', 'currencies_spr.name',  $name ]) ;
        }

        $query->orderBy('currencies_spr.name ASC');

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 15,
            ],
        ]);

        return $dataProvider;
    }

    public static function getPairs()
    {
        $pairs = (new Query())
            ->select(' code, en_code, base_currency, name')
            ->from('currencies_spr')
            ->orderBy('name')
            ->where(['deleted_at' => null])
            ->all();
        return $pairs;
    }

    public static function fromArray(array $params = [])
    {
        $currency = new static();
        $currency->attributes = $params;
        return $currency;
    }

    public static function findById($id)
    {
        return static::find()
            ->select('id, code, en_code, units, base_currency, name, created_at, updated_at, deleted_at')
            ->where('id=:id', ['id' => $id])
            ->asArray()
            ->one();
    }
}
