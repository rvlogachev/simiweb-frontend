<?php

namespace app\assets;

use yii\web\AssetBundle;

class CloudAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public function init()
    {
        parent::init();

            $this->js[] = 'assets/cloud_client.js';
            $this->js[] = 'assets/main.js';

    }
}
