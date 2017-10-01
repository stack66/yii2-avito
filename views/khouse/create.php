<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Khouse */

$this->title = Yii::t('app', 'Create Khouse');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Khouses'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="khouse-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
