<?php

namespace app\assets;

use yii\web\AssetBundle;

class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public function init()
    {
        parent::init();
        if (YII_ENV === 'dev') {
            $this->css[] = 'assets/inertia/css/app.css';
//            $this->css[] = 'assets/inertia/css/custom.css';
            $this->js[] = 'assets/inertia/js/app.js';
//            $this->js[] = 'assets/inertia/js/custom.js';
        } else {
//            $this->css[] = 'assets/inertia/css/custom.css';
            $this->css[] = 'assets/inertia/css/app.min.css';
            $this->js[] = 'assets/inertia/js/app.min.js';
//            $this->js[] = 'assets/inertia/js/custom.js';
        }
    }
}
