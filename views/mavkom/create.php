<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Mavito */

$this->title = Yii::t('app', 'Создать объект');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Объекты'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mavito-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
