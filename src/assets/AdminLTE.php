<?php

namespace alexeevdv\adminlte\assets;

class AdminLTE extends \yii\web\AssetBundle
{
    public $sourcePath = '@bower/admin-lte';

    public $js = [
        'dist/js/app.min.js',

        'plugins/iCheck/icheck.min.js'
    ];

    public $css = [
        '//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css',
        'dist/css/AdminLTE.min.css',
        'dist/css/skins/skin-blue-light.min.css',

        'plugins/iCheck/all.css',
        'plugins/iCheck/square/blue.css',
    ];

    public $depends = [
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
