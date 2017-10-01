<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
use yii\widgets\Pjax;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MavitoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Квартиры');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mavito-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Создать объект'), ['create'], ['class' => 'btn btn-default']) ?>
    
            <?php \yii\bootstrap\Modal::begin([
            'id' => 'search',
             'size' => 'SIZE_LARGE',
             'header' => ' <h4>Поиск объекта</h4>',
            'closeButton' => ['tag' => 'button', 'label' => '&times;'],
            'toggleButton' => [
                'label' => 'Поиск',
                'data-target' => '#search',
                'class' => 'btn btn-default',
             //   'href' => Url::toRoute(['search?...', 'partyID'=> $model->id]),
            ],
            
            'clientOptions' => false,
        ]); ?>
        <?php
    $this->registerJs(
        '$("document").ready(function(){
            $("#new_note").on("pjax:end", function() {
            $.pjax.reload({container:"#notes"});  //Reload GridView
        });
    });'
    );
    ?>
    <?php yii\widgets\Pjax::begin(['id' => 'new_note']) ?>
        <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        ]); ?>
        <?= $form->field($searchModel, 'id') ?>
        <?= $form->field($searchModel, 'obj')->dropDownList([
        //'' => '',
        '1-к квартира' => '1-к квартира',
        '2-к квартира' => '2-к квартира',
        '3-к квартира' => '3-к квартира',
        '4-к квартира' => '4-к квартира',
        '5-к квартира' => '5-к квартира',
        //'Гостинка' => 'Гостинка',
        //'Комната' => 'Комната',
        //'Дом' => 'Дом',
        //'Земли' => 'Земли'
        ],
        $params = [
        'prompt' => 'Тип объекта ...',
        ]
        );?>
     <?=    $form->field($searchModel, 'region')->dropDownList([
    //'' => '',
    'Авиастроительный' => 'Авиастроительный',
    'Вахитовский' => 'Вахитовский',
    'Кировский' => 'Кировский',
    'Московский'=>'Московский',
    'Ново-Савиновский' => 'Ново-Савиновский',
    'Приволжский'=> 'Приволжский',
    'Советский' => 'Советский'
    ],
    $params = [
        'prompt' => 'Район ...',
    ]
    );?>
<?=  $form->field($searchModel, 'min_price', [
      'inputTemplate' => '<b>Стоимость</b><div class="input-group"><span class="input-group-addon">@</span>{input}</div>',
       'inputOptions' => [
      'placeholder' => 'Цена От ...',
      'value' => '0'
      ]
  ])->label(false);
?>
<?=  $form->field($searchModel, 'max_price', [
      'inputTemplate' => '<div class="input-group"><span class="input-group-addon">@</span>{input}</div>',
       'inputOptions' => [
      'placeholder' => 'Цена До ...'
      ]
  ])->label(false);
?>
<?=  $form->field($searchModel, 'date', [
      'inputTemplate' => '<div class="input-group"><span class="input-group-addon">@</span>{input}</div>',
       'inputOptions' => [
      'placeholder' => 'От'
      ]
  ]);
?>
<?=  $form->field($searchModel, 'date', [
      'inputTemplate' => '<div class="input-group"><span class="input-group-addon">@</span>{input}</div>',
       'inputOptions' => [
      'placeholder' => 'До'
      ]
  ])->label(false);
?>
    <div class="form-group">
     <?= Html::submitButton($searchModel->isNewRecord ? Yii::t('app', 'Найти') : Yii::t('app', 'Отмена'), ['class' => $searchModel->isNewRecord ? 'btn btn-success' : 'btn btn-default']) ?>
    </div>
        <?php ActiveForm::end(); ?>
        <?php Pjax::end(); ?>
        <?php \yii\bootstrap\Modal::end(); ?>

    </p>
    </div>
    <?php Pjax::begin(['id' => 'notes']); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           // 'id',
            'obj:ntext',
            'addr:ntext',
            'region:ntext',
            'price',
            'm2',
            'floor',
            'floors',
            // 'links',
             //'descr:ntext',
            // 'date',
             'last_updated:ntext',
             'tel',

            ['class' => 'yii\grid\ActionColumn'],
        ],
        'pager' => [
        'firstPageLabel' => 'Первая',
        'lastPageLabel'  => 'Последняя'
    ]
    ]); ?>
  <?php Pjax::end(); ?>
</div>
