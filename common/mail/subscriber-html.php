<?php
/** @var $channel \common\models\User
 *  @var $user \common\models\User
 */
?>

<p>Привет <?php echo $channel->username ?></p>
<p>Пользователь <?php echo \common\helpers\Html::channelLink($user, true)?> подписался на вас</p>
<p>ATube</p>