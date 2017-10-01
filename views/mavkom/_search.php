<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MavitoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mavito-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'addr') ?>

    <?= $form->field($model, 'price') ?>

    <?= $form->field($model, 'm2') ?>

    <?= $form->field($model, 'floor') ?>

    <?php // echo $form->field($model, 'links') ?>

    <?php // echo $form->field($model, 'descr') ?>

    <?php // echo $form->field($model, 'date') ?>

    <?php  echo $form->field($model, 'last_updated') ?>

    <?php // echo $form->field($model, 'tel') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Поиск'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Сброс'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
