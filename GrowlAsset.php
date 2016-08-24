<?php

/**
 * @copyright Copyright (c) 2015 Harijs Puga
 * @license MIT
 */

namespace gentumsoft\growl;

use yii\web\AssetBundle;

class GrowlAsset extends AssetBundle
{

    public $sourcePath = '@vendor/omj/yii2-growl/assets';

    public $depends = [
        'yii\web\JqueryAsset',
    ];

    public function init()
    {
        $this->js[] = 'js/jquery.growl.js';
        $this->css[] = 'css/jquery.growl.css';
        parent::init();
    }
}
