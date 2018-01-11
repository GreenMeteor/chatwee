<?php

use yii\helpers\Url;
use humhub\libs\Html;
use humhub\models\Setting;

\humhub\modules\Chatwee\Assets::register($this);
?>

<?= Html::beginTag('div') ?>
<script src="<?= $ChatweeUrl; ?>"></script>
<?= Html::endTag('div'); ?>
