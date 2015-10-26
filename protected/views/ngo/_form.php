<?php
/* @var $this NgoController */
/* @var $model Ngo */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ngo-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Ngo_id'); ?>
		<?php echo $form->textField($model,'Ngo_id'); ?>
		<?php echo $form->error($model,'Ngo_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Ngo_name'); ?>
		<?php echo $form->textField($model,'Ngo_name',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Ngo_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'address'); ?>
		<?php echo $form->textField($model,'address',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'upload_doc'); ?>
		<?php echo $form->textField($model,'upload_doc',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'upload_doc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'picture'); ?>
		<?php echo $form->textField($model,'picture',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'picture'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->