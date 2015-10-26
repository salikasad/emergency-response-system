<?php
/* @var $this UserWriteStoryController */
/* @var $data UserWriteStory */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('User_user_id')); ?>:</b>
	<?php echo CHtml::encode($data->User_user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('story_story_id')); ?>:</b>
	<?php echo CHtml::encode($data->story_story_id); ?>
	<br />


</div>