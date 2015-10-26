<?php
/* @var $this UserRateReviewNgoController */
/* @var $model UserRateReviewNgo */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-rate-review-ngo-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'rate'); ?>
		<?php echo $form->textField($model,'rate'); ?>
		<?php echo $form->error($model,'rate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'review'); ?>
		<?php echo $form->textField($model,'review',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'review'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'User_user_id'); ?>
		<?php echo $form->textField($model,'User_user_id'); ?>
		<?php echo $form->error($model,'User_user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Ngo_Ngo_id'); ?>
		<?php echo $form->textField($model,'Ngo_Ngo_id'); ?>
		<?php echo $form->error($model,'Ngo_Ngo_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->