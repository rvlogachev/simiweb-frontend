<?php

namespace app\assets;

use yii\web\AssetBundle;
use yii\web\YiiAsset;

class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public function init()
    {
        parent::init();
        if (YII_ENV === 'dev') {

            $this->css[] = 'assets/inertia/css/vendors/aos.css';
            $this->css[] = 'assets/inertia/css/style.css';
            $this->css[] = 'assets/inertia/css/app.css';
            $this->css[] = 'assets/inertia/css/custom.css';

            $this->js[] = 'assets/inertia/js/vendors/alpinejs.min.js';
            $this->js[] = 'assets/inertia/js/vendors/aos.js';
            $this->js[] = 'assets/inertia/js/vendors/sticky.min.js';
            $this->js[] = 'assets/inertia/js/main.js';
            $this->js[] = 'assets/inertia/js/app.js';
            $this->js[] = 'assets/inertia/js/custom.js';

        } else {
            $this->css[] = 'assets/inertia/css/vendors/aos.css';
            $this->css[] = 'assets/inertia/css/style.css';
            $this->css[] = 'assets/inertia/css/custom.css';
            $this->css[] = 'assets/inertia/css/app.min.css';

            $this->js[] = 'assets/inertia/js/vendors/alpinejs.min.js';
            $this->js[] = 'assets/inertia/js/vendors/aos.js';
            $this->js[] = 'assets/inertia/js/vendors/sticky.min.js';
            $this->js[] = 'assets/inertia/js/main.js';
            $this->js[] = 'assets/inertia/js/app.min.js';
            $this->js[] = 'assets/inertia/js/custom.js';
        }
    }

    public $depends = [
        YiiAsset::class,
//        BootstrapAsset::class,
//        Html5shiv::class,
//        NpmFreeAssetBundle::class,
    ];
}
