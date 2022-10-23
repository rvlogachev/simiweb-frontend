<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\modules\management\models\ManagementSite */

$this->title = Yii::t('app', 'Create Management Site');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Management Sites'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="management-site-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
