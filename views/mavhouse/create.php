<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Mavhouse */

$this->title = Yii::t('app', 'Create Mavhouse');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Mavhouses'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mavhouse-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
