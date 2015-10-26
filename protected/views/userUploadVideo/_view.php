<?php
/* @var $this UserUploadVideoController */
/* @var $data UserUploadVideo */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('User_user_id')); ?>:</b>
	<?php echo CHtml::encode($data->User_user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('video_video_id')); ?>:</b>
	<?php echo CHtml::encode($data->video_video_id); ?>
	<br />


</div>