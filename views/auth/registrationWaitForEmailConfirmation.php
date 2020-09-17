<?php

use webvimark\modules\UserManagement\UserManagementModule;

/**
 * @var yii\web\View $this
 * @var webvimark\modules\UserManagement\models\User $user
 */

$this->title = \Yii::t('layout', 'check_email_activate_account');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="registration-wait-for-confirmation">

	<div class="alert alert-info text-center">
		<?= \Yii::t('layout', 'check_email_activate_account') ?> <b><?= $user->email ?></b>
	</div>

</div>
