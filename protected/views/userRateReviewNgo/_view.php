<?php
/* @var $this UserRateReviewNgoController */
/* @var $data UserRateReviewNgo */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rate')); ?>:</b>
	<?php echo CHtml::encode($data->rate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('review')); ?>:</b>
	<?php echo CHtml::encode($data->review); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('User_user_id')); ?>:</b>
	<?php echo CHtml::encode($data->User_user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Ngo_Ngo_id')); ?>:</b>
	<?php echo CHtml::encode($data->Ngo_Ngo_id); ?>
	<br />


</div>