<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = Yii::t('common','signup');
$this->params['breadcrumbs'][] = $this->title;
?>
    <div class="row">
        <div class="col-lg-4"></div>
        <div class="col-lg-4 ">
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

                <?= $form->field($model, 'username',[
                  'template' => "<div class=\"input-group\">
                        <span class=\"input-group-addon\"><i class=\"icon iconfont\">&#xe601;</i>注册帐号</span>{input}
                 </div>"
                ])->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'email',[
                    'template' => "<div class=\"input-group\">
                        <span class=\"input-group-addon\"><i class=\"icon iconfont\">&#xe602;</i>注册邮箱</span>{input}</div>"
                ]) ?>

                <?= $form->field($model, 'password',[
                    'template' => "<div class=\"input-group\">
                        <span class=\"input-group-addon\"><i class=\"icon iconfont\">&#xe600;</i>注册密码
</span>{input}</div>"])->passwordInput() ?>

                <div class="form-group">
                    <?= Html::submitButton(Yii::t('common','signup'), ['class' => 'btn btn-success btn-block', 'name' => 'signup-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
        <div class="col-lg-4"></div>
    </div>