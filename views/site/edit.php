<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$form = ActiveForm::begin([
    'id'=>'login-form',
    'options'=>['class'=>'form-horizontal'],

]) ?>

    <?= $form->field($model,'city') ?>
    <?= $form->field($model,'age') ?>
    <?= $form->field($model,'population') ?>
    <?= $form->field($model,'square') ?>



            <?= Html::submitButton('Сохранить', ['class'=>'btn btn-primary']) ?>

<?php ActiveForm::end() ?>

