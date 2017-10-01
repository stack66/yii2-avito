<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use newerton\fancybox\FancyBox;

/* @var $this yii\web\View */
/* @var $model app\models\Mavito */

$this->title = $model->id;
$prev= Yii::$app->request->referrer;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Объекты'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mavito-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <a class ='btn btn-default' href=<?php echo$prev ?> >Назад</a>
        <?= Html::a(Yii::t('app', 'Изменить'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Удалить'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Правда удалить объект?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'obj',
            'addr:ntext',
            'region',
            'price',
            'm2',
            'floor',
            'floors',
            'links',
            'descr:ntext',
            'date',
            'last_updated:ntext',
            'tel',
        ],
    ]) ?>
    <h3>Фото объекта</h3>
<?php
echo newerton\fancybox\FancyBox::widget([
    'target' => 'a[rel=group]',
    'helpers' => true,
    'mouse' => true,
    'config' => [
        'maxWidth' => '83%',
        'maxHeight' => '83%',
        'playSpeed' => 7000,
        'padding' => 10,
        'fitToView' => false,
        'width' => '50%',
        'height' => '50%',
        'autoSize' => false,
        'closeClick' => false,
        'openEffect' => 'elastic',
        'closeEffect' => 'elastic',
        'prevEffect' => 'elastic',
        'nextEffect' => 'elastic',
        'closeBtn' => false,
        'openOpacity' => true,
        'helpers' => [
            'title' => ['type' => 'float'],
            'buttons' => [],
            'thumbs' => ['width' => 70, 'height' => 100],
            'overlay' => [
                'css' => [
                    'background' => 'rgba(0, 0, 0, 0.8)'
                ]
            ]
        ],
    ]
]);
if (strlen($model->linkimg)>0)
{
	$url = explode('|',$model->linkimg);
	$len = count($url);
	for  ($i=0; $i<$len; $i++)
	{
	echo Html::a(Html::img($url[$i],["style"=>"width:200px; height:200px;"]),
		$url[$i],["data-fancybox"=>"images-preview"],['rel'=>'group']);
	}
}
?>    
</div>
