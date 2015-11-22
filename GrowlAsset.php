<?php

/**
 * @link http://gentum.lv
 * @copyright Copyright (c) 2015 Harijs Puga
 * @license MIT
 */

namespace gentumsoft\growl;

use yii\web\AssetBundle;

/**
 * @author Harijs Puga <harijs98@gmail.com>
 */

class GrowlAsset extends AssetBundle
{

    public $sourcePath = '@vendor/gentumsoft/growl/assets';

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
