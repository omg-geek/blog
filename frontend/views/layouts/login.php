<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
$this->registerCss('body {
    background-image: url('.Yii::$app->params['frontUrl'] .'/static/images/back.jpg);
    background-size:cover;
}');
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <div class="container">
        <div class="site-login text-center">

            <h1><?= Html::a(Yii::t('common','omg'), Yii::$app->params['frontUrl']) ?></h1>

            <h3 class="text-center"><?=Yii::t('common','brief')?></h3>
            <div class="row" style="margin:50px 0px;">
                <div class="col-lg-5 col-xs-4">
                    <hr>
                </div>
                <div class="col-lg-2 col-xs-4">
                    <h4><span>
                            <?= Html::a(Yii::t('common','login'), Yii::$app->params['login']) ?>
                            <b>·</b>
                            <?= Html::a(Yii::t('common','signup'), Yii::$app->params['signup']) ?>
                        </span></h4>
                </div>
                <div class="col-lg-5 col-lg-4">
                    <hr>
                </div>
            </div>
            <?= Alert::widget() ?>
        <?= $content ?>
        </div>
    </div>
</div>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
