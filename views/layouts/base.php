<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\assets\AppAsset;
use yii\helpers\Html;
use yii\helpers\Url;
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-full bg-gray-200">
<head>
    <base href="<?= Url::base(true) ?>">
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <title><?= Html::encode($this->title) ?></title>
    <link rel="shortcut icon" href="assets/inertia/img/favicon.ico">
    <link rel="mask-icon" href="assets/inertia/img/safari-pinned-tab.svg" color="#0089c5">
    <link rel="manifest" href="assets/inertia/img/site.webmanifest">
    <?php $this->head() ?>
     
</head>
<body class="font-sans leading-none text-gray-700 antialiased">
<?php $this->beginBody() ?>
<?= $content ?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
