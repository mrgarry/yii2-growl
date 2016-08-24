<?php

/**
 * @link http://gentum.lv
 * @copyright Copyright (c) 2015 Harijs Puga
 * @license MIT
 */

namespace omj\growl;

use Yii;
use yii\base\Widget;



/**
 * Pure JavaSript growl widget, can be lauched via js
 * @author Harijs Puga
 * JS source here:
 * @link http://ksylvest.github.io/jquery-growl/
 * 
 * Short tutorial:
 * <script type="text/javascript">
 *  $.growl({ title: "Growl", message: "The kitten is awake!" });
 *  $.growl.error({ message: "The kitten is attacking!" });
 *  $.growl.notice({ message: "The kitten is cute!" });
 *  $.growl.warning({ message: "The kitten is ugly!" });
 *  </script>
 * 
 * Must be initiated in View php section like this:
 * GrowlAsset::register($this); ($this - View)
 * Growl::widget();
 */


class Growl extends Widget {

    /**
     * @inheritdoc
     */
    
    public function init() {
        $view = $this->getView();
        GrowlAsset::register($view);
    }
    
}
