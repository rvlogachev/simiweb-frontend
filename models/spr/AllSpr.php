<?php

namespace app\models\spr;

use app\components\SoftDeleteTrait;
use Yii;
use yii\behaviors\TimestampBehavior;
use yii\data\ActiveDataProvider;
use yii\db\Query;
use yii\filters\AccessControl;

/**
 * This is the model class for table "business_algorythms_spr".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $code
 * @property string|null $params
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property string|null $deleted_at
 */
class AllSpr extends \yii\db\ActiveRecord
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
        return 'all_spr';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'string', 'max' => 30 ],
            [['count_entrys'], 'string', 'max' => 10],
            [['updated_at'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Name',
            'count_entrys' => 'Count Entrys',
            'updated_at' => 'Updated At',
        ];
    }

    public static function findByParams($search = null, $trashed = null)
    {
        $query = (new Query())
            ->select('
             all_spr.name,
             all_spr.count_entrys,
             all_spr.updated_at')
            ->from('all_spr');

        if (!empty($search)) {
            $query->andWhere(['like', 'all_spr.name', $search]);
        }



        $query->orderBy('all_spr.name ASC');
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        return $dataProvider;
    }

    /**
     * @return array
     */

    public static function fromArray(array $params1 = [])
    {
        $all_spr = new static();
        $all_spr->attributes = $params1;
        return $all_spr;
    }

}
