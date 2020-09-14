<?php

use webvimark\modules\UserManagement\UserManagementModule;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var webvimark\modules\UserManagement\models\forms\ConfirmEmailForm $model
 */

$this->title = Yii::t('layout', 'confirm_email');
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="confirm-email">

	<h2 class="lte-hide-title"><?= $this->title ?></h2>

	<div class="panel panel-default">
		<div class="panel-body">

			<?php if ( Yii::$app->session->hasFlash('error') ): ?>
				<div class="alert alert-warning text-center">
					<?= Yii::$app->session->getFlash('error') ?>
				</div>
			<?php endif; ?>

			<?php if ( $model->user->confirmation_token === null ): ?>

				<?php $form = ActiveForm::begin([
					'id'=>'user',
					'layout'=>'horizontal',
					'validateOnBlur'=>false,
				]); ?>

				<?= $form->field($model, 'email')->textInput(['maxlength' => 255, 'autofocus'=>true]) ?>

				<div class="form-group">
					<div class="col-sm-offset-3 col-sm-9">
						<?= Html::submitButton(
							'<span class="glyphicon glyphicon-ok"></span> ' . Yii::t('layout', 'confirm'),
							['class' => 'btn btn-primary']
						) ?>
					</div>
				</div>

				<?php ActiveForm::end(); ?>
			<?php else: ?>

				<div class="alert alert-info text-center">
					<?= Yii::t('layout', 'mail_activation', [
						'0' => '<strong>',
						'1' => '</strong>',
						'mail' => $model->user->email,
						'min' => $model->getTokenTimeLeft(true),
					]) ?>
				</div>
			<?php endif; ?>


		</div>
	</div>
</div>
