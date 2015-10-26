<?php
/* @var $this UserJoinEventController */
/* @var $model UserJoinEvent */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-join-event-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'User_user_id'); ?>
		<?php echo $form->textField($model,'User_user_id'); ?>
		<?php echo $form->error($model,'User_user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'event_event_id'); ?>
		<?php echo $form->textField($model,'event_event_id'); ?>
		<?php echo $form->error($model,'event_event_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->