<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class DateTimepickerAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'js/datetimepicker/css/bootstrap-datetimepicker.min.css',
    ];
    public $js = [
        'https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js',
      //  'https://rawgit.com/Eonasdan/bootstrap-datetimepicker/master/build/js/bootstrap-datetimepicker.min.js',
        'js/datetimepicker/js/bootstrap-datetimepicker.min.js',
        'js/datetimepicker/js/bdt_init.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
