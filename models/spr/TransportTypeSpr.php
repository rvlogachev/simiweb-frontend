<?php

namespace app\models\spr;

use app\components\SoftDeleteTrait;
use Yii;
use yii\behaviors\TimestampBehavior;
use yii\data\ActiveDataProvider;
use yii\db\Query;
use yii\filters\AccessControl;

/**
 * This is the model class for table "transport_type_spr".
 *
 * @property int $id
 * @property string $code
 * @property string $name
 * @property string|null $color
 * @property string|null $hex_color
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property string|null $deleted_at
 *
 * @property TransportSpr[] $transportSprs
 */
class TransportTypeSpr extends \yii\db\ActiveRecord
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
        return 'transport_type_spr';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['code', 'name'], 'required'],
            [['created_at', 'updated_at', 'deleted_at'], 'safe'],
            [['code'], 'string', 'max' => 50],
            [['name'], 'string', 'max' => 512],
            [['color', 'hex_color'], 'string', 'max' => 10],
            [['code'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ИД типа транспорта',
            'code' => 'Код типа транспорта',
            'name' => 'Тип транспорта',
            'color' => 'Цвет транспорта',
            'hex_color' => 'Цвет транспорта  HEX',
            'created_at' => 'Дата создания',
            'updated_at' => 'Дата обновления',
            'deleted_at' => 'Дата удаления',
        ];
    }
    /**
     * Gets query for [[TransportSprs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTransportSprs()
    {
        return $this->hasMany(TransportSpr::className(), ['transport_type_code' => 'code']);
    }
    public static function findByParams($search = null, $trashed_button = null)
    {
        $query = (new Query())
            ->select('
            transport_type_spr.id,
            transport_type_spr.code,
            transport_type_spr.name,
            transport_type_spr.color,
            transport_type_spr.hex_color,
            transport_type_spr.created_at,
            transport_type_spr.updated_at,
            transport_type_spr.deleted_at')
            ->from('transport_type_spr');

        if (!empty($search)) {
            $query->andWhere(['like', 'transport_type_spr.code', $search])
                ->orWhere(['like', 'upper(transport_type_spr.code)', strtoupper($search)])
                ->orWhere(['like', 'lower(transport_type_spr.code)', strtolower($search)])
                ->orWhere(['like', 'transport_type_spr.name', $search])
                ->orWhere(['like', 'upper(transport_type_spr.name)', strtoupper($search)])
                ->orWhere(['like', 'lower(transport_type_spr.name)', strtolower($search)])
                ->orWhere(['like', 'transport_type_spr.color', $search])
                ->orWhere(['like', 'upper(transport_type_spr.color)', strtoupper($search)])
                ->orWhere(['like', 'lower(transport_type_spr.color)', strtolower($search)])
                ->orWhere(['like', 'transport_type_spr.hex_color', $search])
                ->orWhere(['like', 'upper(transport_type_spr.hex_color)', strtoupper($search)])
                ->orWhere(['like', 'lower(transport_type_spr.hex_color)', strtolower($search)]);
        }
        if ($trashed_button == 'true') {
        } else {
            $query->andWhere([ 'transport_type_spr.deleted_at' => null]);
        }

        $query->orderBy('transport_type_spr.id ASC');

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
            ->select('code, name')
            ->from('transport_type_spr')
            ->orderBy('id')
            ->where(['deleted_at' => null])
            ->all();
        return $pairs;
    }
    public static function fromArray(array $params = [])
    {
        $transport_type = new static();
        $transport_type->attributes = $params;
        return $transport_type;
    }

    public static function findById($id)
    {
        return static::find()
            ->select('id, code, name, color, hex_color, created_at, updated_at, deleted_at')
            ->where('id=:id', ['id' => $id])
            ->asArray()
            ->one();
    }
}
