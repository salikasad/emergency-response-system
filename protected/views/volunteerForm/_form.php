<?php
/* @var $this VolunteerFormController */
/* @var $model VolunteerForm */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'volunteer-form-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'team_name'); ?>
		<?php echo $form->textField($model,'team_name',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'team_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name_of_ngo'); ?>
		<?php echo $form->textField($model,'name_of_ngo',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'name_of_ngo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'address'); ?>
		<?php echo $form->textField($model,'address',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'no_of_members'); ?>
		<?php echo $form->textField($model,'no_of_members'); ?>
		<?php echo $form->error($model,'no_of_members'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'experience'); ?>
		<?php echo $form->textField($model,'experience',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'experience'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'User_user_id'); ?>
		<?php echo $form->textField($model,'User_user_id'); ?>
		<?php echo $form->error($model,'User_user_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->