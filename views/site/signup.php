    <?php
     
    use yii\helpers\Html;
    use yii\bootstrap\ActiveForm;
     
    $this->title = 'Регистрация';
    $this->params['breadcrumbs'][] = $this->title;
    ?>
    <div class="site-signup">
        <h1><?= Html::encode($this->title) ?></h1>
        <p>Пожалуйста эаполите эти поля:</p>
        <div class="row">
            <div class="col-lg-5">
     
                <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
                    <?= $form->field($model, 'username')->textInput(['autofocus' => true])->label('Логин') ?>
                    <?= $form->field($model, 'email') ?>
                    <?= $form->field($model, 'password')->passwordInput()->label('Пароль') ?>
                    <div class="form-group">
                        <?= Html::submitButton('Подтвердить', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                    </div>
                <?php ActiveForm::end(); ?>
     
            </div>
        </div>
    </div>
