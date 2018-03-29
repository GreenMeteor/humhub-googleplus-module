<?php

use yii\helpers\Url;
use humhub\libs\Html;
use humhub\models\Setting;

\humhub\modules\googleplus\Assets::register($this);
?>

<div class="panel panel-default panel-googleplus" id="panel-googleplus">
    <?= \humhub\widgets\PanelMenu::widget(['id' => 'panel-googleplus']); ?>
  <div class="panel-heading">
    <?=Yii::t('GoogleplusModule.base', '<strong>Google+</strong>'); ?>
  </div>
  <div class="panel-body">

<?= Html::beginTag('div') ?>
<script src="https://apis.google.com/js/platform.js" async defer></script>
<g:person href="<?= $googleplusUrl ?>" data-rel="author" data-width="100%" data-height="500"></g:person>
<?= Html::endTag('div'); ?>
</div>
</div>
