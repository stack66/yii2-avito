<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MavobjSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mavobj-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'obj') ?>

    <?= $form->field($model, 'addr') ?>

    <?= $form->field($model, 'region') ?>

    <?= $form->field($model, 'price') ?>

    <?php // echo $form->field($model, 'm2') ?>

    <?php // echo $form->field($model, 'floor') ?>

    <?php // echo $form->field($model, 'floors') ?>

    <?php // echo $form->field($model, 'links') ?>

    <?php // echo $form->field($model, 'descr') ?>

    <?php // echo $form->field($model, 'date') ?>

    <?php // echo $form->field($model, 'date1') ?>

    <?php // echo $form->field($model, 'last_updated') ?>

    <?php // echo $form->field($model, 'tel') ?>

    <?php // echo $form->field($model, 'linkimg') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
