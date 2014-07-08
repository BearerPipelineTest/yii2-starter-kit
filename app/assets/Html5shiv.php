<?php
/**
 * Created by PhpStorm.
 * User: zein
 * Date: 7/3/14
 * Time: 8:16 PM
 */

namespace app\assets;


use yii\web\AssetBundle;

class Html5shiv extends AssetBundle{
    public $basePath = '@webroot/vendor/html5shiv';
    public $baseUrl = '@web/vendor/html5shiv';
    public $js = [
        'dist/html5shiv.min.js'
    ];

    public $jsOptions = [
        'condition'=>'lt IE 9'
    ];
} 