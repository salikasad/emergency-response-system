<?php
/* @var $this UserUploadVideoController */
/* @var $model UserUploadVideo */
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
		<?php echo $form->label($model,'User_user_id'); ?>
		<?php echo $form->textField($model,'User_user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'video_video_id'); ?>
		<?php echo $form->textField($model,'video_video_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->