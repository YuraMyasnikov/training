<?php
/**
 * @link https://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license https://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/main.css',
        'css/site.css'
    ];
    public $js = [
        /*'js/main.js'*/
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset',
    ];

    public function init() {
        if(!YII_ENV_PROD) {
            foreach($this->js as &$js) {
                $js = $js . '?time=' . time();
            }
            foreach($this->css as &$css) {
                $css = $css . '?time=' . time();
            }
        }
        parent::init();
    }
}
