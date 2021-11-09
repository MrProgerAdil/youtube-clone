<?php
use yii\bootstrap4\Nav;
?>

<aside class="shadow">
    <?php echo Nav::widget([
        'options' => [
            'class' => 'd-flex flex-column nav-pills'
        ],
        'items' => [
            [
                'label' => 'Обзорная панель',
                'url' => ['/site/index']
            ],
            [
                'label' => 'Видео ролики',
                'url' => ['/video/index']
            ]
        ]
    ]) ?>
</aside>