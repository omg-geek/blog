<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = Yii::t('common','login');
$this->params['breadcrumbs'][] = $this->title;

?>
    <div class="row">
        <div class="col-lg-4"></div>
        <div class="col-lg-4">
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                <?= $form->field($model, 'username',[
                    'template' => "<div class=\"input-group\"><span class=\"input-group-addon\"><i class=\"icon iconfont\">&#xe601;</i>帐号</span>{input}</div>"
                ])->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'password',[
                    'template' => "<div class=\"input-group\"><span class=\"input-group-addon\" ><i class=\"icon iconfont\">&#xe600;</i>密码
</span>{input}</div>"
                ])->passwordInput() ?>

                <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-9">{input}</div></div>',
            ]) ?>

            <div class="form-group">
                <?= Html::submitButton(Yii::t('common','login'), ['class' => 'btn btn-primary btn-block', 'name' => 'login-button']) ?>
            </div>

            <div>
                <?= $form->field($model, 'rememberMe')->checkbox() ?>
                <?= Yii::t('common','forget password ?') . Html::a(Yii::t('common','reset it'), ['site/request-password-reset']) ?>.
            </div>



            <?php ActiveForm::end(); ?>
        </div>
        <div class="col-lg-4"></div>
    </div>
