<?php
use yii\bootstrap4\Nav;
?>

<aside class="shadow">
    <?php echo Nav::widget([
        'options' => [
            'class' => 'd-flex flex-column nav-pills'
        ],
        'encodeLabels' => false,
        'items' => [
            [
                'label' => '<i class="fas fa-home"></i> Главная',
                'url' => ['/video/index']
            ],
            [
                'label' => '<i class="fas fa-history"></i> История просмотров',
                'url' => ['/video/history']
            ]
        ]
    ]) ?>
</aside>