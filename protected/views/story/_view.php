<?php
/* @var $this StoryController */
/* @var $data Story */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('story_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->story_id), array('view', 'id'=>$data->story_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($data->title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('story')); ?>:</b>
	<?php echo CHtml::encode($data->story); ?>
	<br />


</div>