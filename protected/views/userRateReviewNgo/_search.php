<?php
/* @var $this UserRateReviewNgoController */
/* @var $model UserRateReviewNgo */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rate'); ?>
		<?php echo $form->textField($model,'rate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'review'); ?>
		<?php echo $form->textField($model,'review',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'User_user_id'); ?>
		<?php echo $form->textField($model,'User_user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Ngo_Ngo_id'); ?>
		<?php echo $form->textField($model,'Ngo_Ngo_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->