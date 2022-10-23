<?php

namespace app\models\spr;

use app\components\SoftDeleteTrait;
use Yii;
use yii\behaviors\TimestampBehavior;
use yii\data\ActiveDataProvider;
use yii\db\Query;
use yii\filters\AccessControl;

/**
 * This is the model class for table "files_spr".
 *
 * @property int $id
 * @property string $code
 * @property string $name
 * @property string $filename
 * @property string|null $en_name
 * @property string|null $type
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property string|null $deleted_at
 */
class FilesSpr extends \yii\db\ActiveRecord
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
        return 'files_spr';
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
            [['name', 'filename', 'en_name'], 'string', 'max' => 512],
            [['type'], 'string', 'max' => 20],
            [['code'], 'unique'],
            [['en_name'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ИД файла',
            'name' => 'Наименование файла',
            'code' => 'Код файла',
            'filename' => 'Файл',
            'en_name' => 'Наименование на английском',
            'type' => 'Тип файла',
            'created_at' => 'Дата создания',
            'updated_at' => 'Дата обновления',
            'deleted_at' => 'Дата удаления',
        ];
    }

    public static function findByParams($search = null, $trashed = null)
    {
        $query = (new Query())
            ->select('
            files_spr.id,
            files_spr.name,
            files_spr.code,
            files_spr.filename,
            files_spr.en_name,
            files_spr.type,
            files_spr.created_at,
            files_spr.updated_at,
            files_spr.deleted_at')
            ->from('files_spr');

        if (!empty($search)) {
            $query->andWhere(['like', 'files_spr.name', $search])
                ->orWhere(['like', 'upper(files_spr.name)', strtoupper($search)])
                ->orWhere(['like', 'lower(files_spr.name)', strtolower($search)])
                ->orWhere(['like', 'files_spr.filename', $search])
                ->orWhere(['like', 'upper(files_spr.filename)', strtoupper($search)])
                ->orWhere(['like', 'lower(files_spr.filename)', strtolower($search)])
                ->orWhere(['like', 'files_spr.code', $search])
                ->orWhere(['like', 'upper(files_spr.code)', strtoupper($search)])
                ->orWhere(['like', 'lower(files_spr.code)', strtolower($search)])
                ->orWhere(['like', 'files_spr.type', $search])
                ->orWhere(['like', 'upper(files_spr.type)', strtoupper($search)])
                ->orWhere(['like', 'lower(files_spr.type)', strtolower($search)])
                ->orWhere(['like', 'files_spr.en_name', $search])
                ->orWhere(['like', 'upper(files_spr.en_name)', strtoupper($search)])
                ->orWhere(['like', 'lower(files_spr.en_name)', strtolower($search)]);
        }

        if ($trashed === 'with') {
        } elseif ($trashed === 'only') {
            $query->andWhere(['not', ['files_spr.deleted_at' => null]]);
        } else {
            $query->andWhere(['files_spr.deleted_at' => null]);
        }

        $query->orderBy('files_spr.id ASC');

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
            ->select( 'name, code')
            ->from('files_spr')
            ->orderBy('id')
            ->where(['deleted_at' => null])
            ->andWhere(['like', 'files_spr.code', 'spravochnik'])
            ->all();
        return $pairs;
    }

    public static function fromArray(array $params = [])
    {
        $files = new static();
        $files->attributes = $params;
        return $files;
    }

    public static function findById($id)
    {
        return static::find()
            ->select('id, code, name, filename, en_name, type, created_at, updated_at, deleted_at')
            ->where('id=:id', ['id' => $id])
            ->asArray()
            ->one();
    }
}
