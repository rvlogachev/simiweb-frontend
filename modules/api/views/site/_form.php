<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\modules\management\models\ManagementSite */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="management-site-form">

    <?php $form = ActiveForm::begin(); ?>



    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>



    <?php echo $form->field($model, 'code')
        ->hint(Yii::t('app-backend', 'If you\'ll leave this field empty, slug will be generated automatically'))
        ->textInput(['maxlength' => 1024]) ?>




    <?= $form->field($model, 'server_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'priority')->textInput() ?>

    <?= $form->field($model, 'description')->textarea([]) ?>

    <?= $form->field($model, 'image_id')->textInput() ?>

    <?= $form->field($model, 'is_default')->checkbox([
        'checked' => false,
        'style' => 'margin-top:10px;'
    ]); ?>

    <?= $form->field($model, 'active')->checkbox([
        'checked' => false,
        'style' => 'margin-top:10px;'
    ]); ?>
    <?= $form->field($model, 'status')->checkbox([
        'checked' => true,
        'style' => 'margin-top:10px;'
    ]); ?>


    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
