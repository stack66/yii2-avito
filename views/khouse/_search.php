<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\KhouseSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="khouse-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'obj') ?>

    <?= $form->field($model, 'floor') ?>

    <?= $form->field($model, 'price') ?>

    <?= $form->field($model, 'm2') ?>

    <?php  echo $form->field($model, 'region') ?>

    <?php // echo $form->field($model, 'addr') ?>

    <?php // echo $form->field($model, 'price') ?>

    <?php // echo $form->field($model, 'link_show_obj') ?>

    <?php // echo $form->field($model, 'descr') ?>

    <?php // echo $form->field($model, 'date') ?>

    <?php // echo $form->field($model, 'last_updated') ?>

    <?php // echo $form->field($model, 'tel') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
