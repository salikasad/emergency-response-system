<?php
/* @var $this VideoController */
/* @var $data Video */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('video_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->video_id), array('view', 'id'=>$data->video_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('video_file')); ?>:</b>
	<?php echo CHtml::encode($data->video_file); ?>
	<br />


</div>