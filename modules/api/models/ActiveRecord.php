<?php
/**
 */

namespace common\modules\management\models;

use Yii;
use yii\base\InvalidConfigException;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;

/**
 * @method string getTableCacheTag()
 *
 * @property integer      $created_by
 * @property integer      $updated_by
 * @property integer      $created_at
 * @property integer      $updated_at
 *
 *
 */
class ActiveRecord extends \yii\db\ActiveRecord
{

    /**
     * @var array
     */
    public $raw_row = [];

    static public function safeGetTableSchema()
    {
        try {
            return self::getTableSchema();
        } catch (\Exception $exceptione) {
            return false;
        }
    }


    /** @inheritdoc */
    public static function populateRecord($record, $row)
    {
        /** @var static $record */
        $record->raw_row = $row;
        return parent::populateRecord($record, $row);
    }
    /**
     * @inheritdoc
     */
    public function behaviors()
    {


        try {
            if (self::safeGetTableSchema() && self::safeGetTableSchema()->getColumn('created_by') && self::safeGetTableSchema()->getColumn('updated_by')) {
                $result[BlameableBehavior::class] = [
                    'class' => BlameableBehavior::class,
                    'value' => function ($event) {
                        if (\Yii::$app instanceof \yii\console\Application) {
                            return null;
                        } else {
                            $user = Yii::$app->get('user', false);
                            return $user && !$user->isGuest ? $user->id : null;
                        }
                    },
                ];
            }

            if (self::safeGetTableSchema() && self::safeGetTableSchema()->getColumn('created_at') && self::safeGetTableSchema()->getColumn('updated_at')) {
                $result[TimestampBehavior::class] = [
                    'class' => TimestampBehavior::class,
                    /*'value' => function () {
                        return date('U');
                    },*/
                ];
            } elseif (self::safeGetTableSchema() && self::safeGetTableSchema()->getColumn('created_at')) {
                $result[TimestampBehavior::class] = [
                    'class'      => TimestampBehavior::class,
                    'attributes' => [
                        ActiveRecord::EVENT_BEFORE_INSERT => ['created_at'],
                        ActiveRecord::EVENT_BEFORE_UPDATE => [],
                    ],
                ];
            } elseif (self::safeGetTableSchema() && self::safeGetTableSchema()->getColumn('updated_at')) {
                $result[TimestampBehavior::class] = [
                    'class'      => TimestampBehavior::class,
                    'attributes' => [
                        ActiveRecord::EVENT_BEFORE_INSERT => ['updated_at'],
                        ActiveRecord::EVENT_BEFORE_UPDATE => ['updated_at'],
                    ],
                ];
            }

        } catch (InvalidConfigException $e) {

        }

        return $result;
    }
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCreatedBy()
    {
        return $this->hasOne(\Yii::$app->user->identityClass, ['id' => 'created_by']);
    }
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUpdatedBy()
    {
        return $this->hasOne(\Yii::$app->user->identityClass, ['id' => 'updated_by']);
    }
    /**
     * @return array
     */
    public function attributeLabels()
    {
        return [
            'id'         => Yii::t('app-backend', 'ID'),
            'created_by' => Yii::t('app-backend', 'Created By'),
            'updated_by' => Yii::t('app-backend', 'Updated By'),
            'created_at' => Yii::t('app-backend', 'Created At'),
            'updated_at' => Yii::t('app-backend', 'Updated At'),
        ];
    }
    /**
     * @return array
     */
    public function rules()
    {
        $result = [];


        if (self::safeGetTableSchema() && self::safeGetTableSchema()->getColumn('created_by')) {
            $result[] = ['created_by', 'integer'];
        }
        if (self::safeGetTableSchema() && self::safeGetTableSchema()->getColumn('updated_by')) {
            $result[] = ['updated_by', 'integer'];
        }
        if (self::safeGetTableSchema() && self::safeGetTableSchema()->getColumn('created_at')) {
            $result[] = ['created_at', 'integer'];
        }
        if (self::safeGetTableSchema() && self::safeGetTableSchema()->getColumn('updated_at')) {
            $result[] = ['updated_at', 'integer'];
        }

        return $result;
        /*
         return [
             [[
                 'created_by',
                 'updated_by',
                 'created_at',
                 'updated_at',
                 'id'
             ], 'integer'],
         ];*/
    }
}