<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Mavobj */

$this->title = Yii::t('app', 'Create Mavobj');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Mavobjs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mavobj-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
