<?php

use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;

NavBar::begin([
    'brandLabel' => Yii::$app->name,
    'brandUrl' => Yii::$app->homeUrl,
    'options' => ['class' => 'navbar navbar-expand-lg navbar-dark bg-dark shadow-sm']
]);
$menuItems = [
    ['label' => 'Создать', 'url' => ['/video/create']],
];
if (Yii::$app->user->isGuest) {
    $menuItems[] = ['label' => 'Войти', 'url' => ['/site/login']];
} else {
    $menuItems[] = ['label' => 'Выйти ('.Yii::$app->user->identity->username.')',
        'url' => '/site/logout',
        'linkOptions' => [
            'data-method' => 'post'
        ]
    ];
}

echo Nav::widget([
    'options' => ['class' => 'navbar-nav ml-auto'],
    'items' => $menuItems,
]);
NavBar::end();
?>