<?php
use yii\helpers\Html;


/* @var $this yii\web\View */

$this->title = 'Объекты недвижимости';
?>
<?php
	if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
		$uri = 'https://';
	} else {
		$uri = 'http://';
	}
	$uri .= $_SERVER["SERVER_ADDR"];
        $khouse=$uri."/av/web/index.php?r=khouse";
        $mavito=$uri."/av/web/index.php?r=mavito";
        $mavobj=$uri."/av/web/index.php?r=mavobj";
        $mavkom=$uri."/av/web/index.php?r=mavkom";
        $mavhouse=$uri."/av/web/index.php?r=mavhouse";
//	header('Location: '.$uri.'/dashboard/');
//	exit;
?>
<div class="site-index">

    <div class="jumbotron">
        <p class="lead"><h2>Объекты недвижимости в Казани.</h2></p>
       <!-- <p><a class="btn btn-lg btn-success" href="<?php echo $khouse ?>">Сводная таблица</a></p> -->
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4 boxsh">
                <h3>Квартиры</h3>
                <p>
                <a  href="<?php echo $mavito ?>">
                <?= Html::img('@web/images/kvart200x150.jpg', ['alt'=>'Квартира', 'class'=>'']);?>
                </a>
                </p>
            </div>
            <div class="col-lg-4 boxsh">
                <h3>Комнаты</h3>
                <p>
                <a  href="<?php echo $mavkom ?>">
                <?= Html::img('@web/images/komn200x150.jpg', ['alt'=>'Комната', 'class'=>'']);?>
                </a>
            </p>
            </div>
            <div class="col-lg-4 boxsh">
                <h3>Дома, дачи</h3>
                <p>
                <a  href="<?php echo $mavhouse ?>">
                <?= Html::img('@web/images/house200x150.jpg', ['alt'=>'Дом', 'class'=>'']);?>
                </a>
            </p>

            </div>
            <div class="col-lg-4">
                <h3>Сводная таблица 1</h3>
                <p><a class="btn btn-default" href="<?php echo $mavobj ?>"><b>Все объекты &raquo;</b></a></p>
            </div>
            <div class="col-lg-4">
                <h3>Сводная таблица 2</h3>
                <p><a class="btn btn-default" href="<?php echo $khouse ?>"><b>Все объекты &raquo;</b></a></p>
            </div>
            

        </div>

    </div>
</div>
