<?php
/* @var $this UserJoinEventController */
/* @var $data UserJoinEvent */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('User_user_id')); ?>:</b>
	<?php echo CHtml::encode($data->User_user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('event_event_id')); ?>:</b>
	<?php echo CHtml::encode($data->event_event_id); ?>
	<br />


</div>