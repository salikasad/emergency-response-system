<?php
/* @var $this UserUploadVideoController */
/* @var $model UserUploadVideo */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-upload-video-form',
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
		<?php echo $form->labelEx($model,'video_video_id'); ?>
		<?php echo $form->textField($model,'video_video_id'); ?>
		<?php echo $form->error($model,'video_video_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->