<?php
/* @var $this VolunteerFormController */
/* @var $data VolunteerForm */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('team_name')); ?>:</b>
	<?php echo CHtml::encode($data->team_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name_of_ngo')); ?>:</b>
	<?php echo CHtml::encode($data->name_of_ngo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('address')); ?>:</b>
	<?php echo CHtml::encode($data->address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('no_of_members')); ?>:</b>
	<?php echo CHtml::encode($data->no_of_members); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('experience')); ?>:</b>
	<?php echo CHtml::encode($data->experience); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('User_user_id')); ?>:</b>
	<?php echo CHtml::encode($data->User_user_id); ?>
	<br />

	*/ ?>

</div>