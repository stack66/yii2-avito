<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Mavito */

$this->title = Yii::t('app', 'Изменить объект ', [
    'modelClass' => 'Mavito',
]) . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Список объектов'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Изменить');
?>
<div class="mavito-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
