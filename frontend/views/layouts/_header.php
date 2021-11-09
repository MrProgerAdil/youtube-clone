<?php

use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\helpers\Url;

NavBar::begin([
    'brandLabel' => Yii::$app->name,
    'brandUrl' => Yii::$app->homeUrl,
    'options' => ['class' => 'navbar navbar-expand-lg navbar-dark bg-dark shadow-sm']
]);
if (Yii::$app->user->isGuest) {
    $menuItems[] = ['label' => 'Регистрация', 'url' => ['/site/signup']];
    $menuItems[] = ['label' => 'Войти', 'url' => ['/site/login']];
} else {
    $menuItems[] = ['label' => 'Выйти ('.Yii::$app->user->identity->username.')',
        'url' => '/site/logout',
        'linkOptions' => [
            'data-method' => 'post'
        ]
    ];
}
?>
    <form action="<?php echo Url::to(['/video/search'])?>" class="form-inline my- my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Введите запрос" name="keyword" value="<?php echo Yii::$app->request->get('keyword')?>" style="width: 400px">
        <button class="btn btn-outline-success my-2 my-sm-0 px-4"><i class="fas fa-search"></i></button>
    </form>
<?php
echo Nav::widget([
    'options' => ['class' => 'navbar-nav ml-auto'],
    'items' => $menuItems,
]);
NavBar::end();
?>