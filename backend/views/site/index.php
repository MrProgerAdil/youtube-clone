<?php

/* @var $this yii\web\View
 * @var $latestVideo \common\models\Video
 * @var $numberOfView integer
 * @var $numberOfSubscribers integer
 * @var $subscribers \common\models\Subscriber[]
 */

$this->title = 'ATube';
?>
<div class="site-index d-flex">
    <div class="card m-2" style="width: 14rem;">
        <?php if ($latestVideo): ?>
        <div class="embed-responsive embed-responsive-16by9 mb-3">
            <video class="embed-responsive-item" poster="<?php echo $latestVideo->getThumbnailLink() ?>" src="<?php echo $latestVideo->getVideoLink() ?>" controls></video>
        </div>
        <div class="card-body">
            <h6 class="card-title"><?php echo $latestVideo->title ?></h6>
            <p class="card-text">
                Лайки: <?php echo $latestVideo->getLikes()->count() ?>
                <br>
                Дизлайки: <?php echo $latestVideo->getDislikes()->count() ?>
                <br>
                Просмотры: <?php echo $latestVideo->getViews()->count() ?>
            </p>
            <a href="<?php echo \yii\helpers\Url::to(['/video/update', 'id' => $latestVideo->video_id]) ?>" class="btn btn-primary">Редактировать</a>
        </div>
        <?php else:?>
        <div class="card-body">
            У вас ещё нету видеороликов
        </div>
        <?php endif; ?>
    </div>
    <div class="card m-2" style="width: 14rem;">
        <div class="card-body">
            <h6 class="card-title">Количество просмотров</h6>
            <p class="card-text" style="font-size: 50px">
                <?php echo $numberOfView ?>
            </p>
        </div>
    </div>
    <div class="card m-2" style="width: 14rem;">
        <div class="card-body">
            <h6 class="card-title">Количество подписчиков</h6>
            <p class="card-text" style="font-size: 50px">
                <?php echo $numberOfSubscribers ?>
            </p>
        </div>
    </div>
    <div class="card m-2" style="width: 14rem;">
        <div class="card-body">
            <h6 class="card-title">Последние подписки</h6>
            <p class="card-text" style="font-size: 50px">
                <?php foreach ($subscribers as $subscriber): ?>
                    <div>
                        <?php echo $subscriber->user->username ?>
                    </div>
                <?php endforeach; ?>
            </p>
        </div>
    </div>
</div>
