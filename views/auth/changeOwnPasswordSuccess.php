<?php

use webvimark\modules\UserManagement\UserManagementModule;

/**
 * @var yii\web\View $this
 */

$this->title = \Yii::t('layout', 'Passwort ändern');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="change-own-password-success">

	<div class="alert alert-success text-center">
		<?= \Yii::t('kunde', 'password_changed') ?>
	</div>

</div>
