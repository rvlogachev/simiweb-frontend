<?php

namespace app\assets;

use yii\web\AssetBundle;

class EbitdaCloudAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public function init()
    {

        $this->cssOptions = ['position' => \yii\web\View::POS_HEAD];
        $this->jsOptions = ['position' => \yii\web\View::POS_HEAD];
            $this->js[] = 'assets/ebitda_cloud_client.js';
            $this->js[] = 'assets/ebitda.js';
        parent::init();
    }


}
