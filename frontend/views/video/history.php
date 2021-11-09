<?php
use yii\widgets\ListView;
/** @var $dataProvider \yii\data\ActiveDataProvider */
?>
<h>История просмотров</h>
<?php echo ListView::widget([
    'dataProvider' => $dataProvider,
    'itemView' => '_video_item',
    'layout' => '<div class="d-flex flex-wrap">{items}</div>{pager}',
    'itemOptions' => [
        'tag' => false
    ]
]) ?>