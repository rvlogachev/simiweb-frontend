<?php

namespace common\modules\management\models\query;

/**
 * This is the ActiveQuery class for [[\common\modules\management\models\ManagementSite]].
 *
 * @see \common\modules\management\models\ManagementSite
 */
class ManagementSiteQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return \common\modules\management\models\ManagementSite[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return \common\modules\management\models\ManagementSite|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
