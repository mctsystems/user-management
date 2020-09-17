<?php

use webvimark\modules\UserManagement\UserManagementModule;

/**
 * @var yii\web\View $this
 */

$this->title = UserManagementModule::t('front', 'Password recovery');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="password-recovery-success">

	<div class="alert alert-success text-center">
		<?= \Yii::t('romoto', 'check_mail') ?>
	</div>

</div>
