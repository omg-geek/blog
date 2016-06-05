<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',

    'language' => 'zh-CN', // 启用国际化支持
    'sourceLanguage' => 'zh-CN', // 源代码采用中文
    'timeZone' => 'Asia/Shanghai', // 设置时区

    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        //配置的语言包引入
        'i18n' => [
            'translations' => [
                'common' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@common/messages',
                    'sourceLanguage' => 'en',
                    'fileMap' => [
                        'common' => 'common.php',
                    ],
                ],
            ],
        ],
        //URL美化，需要前后台web目录下添加.htaccess文件才可正常使用
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            //伪静态配置
            'suffix' => '.html',
        ],
    ],


];
