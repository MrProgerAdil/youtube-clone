<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Video */

$this->title = 'Создать видео';
$this->params['breadcrumbs'][] = ['label' => 'Videos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="video-create">

    <h1><?= Html::encode($this->title) ?></h1>
    <div class="d-flex flex-column justify-content-center align-items-center">
        <div class="upload-icon">
            <i class="fas fa-upload"></i>
        </div>
        <br>
        <p class="m-0">Нажмите кнопку и выберите файл, чтобы загрузить</p>
        <br>
        <p class="text-muted">Ваше видео будет приватным, пока вы его не опубликуете</p>
        <?php $form = ActiveForm::begin([
                'options' => ['enctype' => 'multipart/form-data']
        ]) ?>
        <?php echo $form->errorSummary($model) ?>
        <button class="btn btn-primary btn-file">
            Выберите файл
            <input type="file" id="videoFile" name="video">
        </button>
        <?php ActiveForm::end() ?>
    </div>
</div>
