<?php
/* @var $this UserController */
/* @var $data User */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->user_id), array('view', 'id'=>$data->user_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('username')); ?>:</b>
	<?php echo CHtml::encode($data->username); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('password')); ?>:</b>
	<?php echo CHtml::encode($data->password); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gender')); ?>:</b>
	<?php echo CHtml::encode($data->gender); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('activekey')); ?>:</b>
	<?php echo CHtml::encode($data->activekey); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_at')); ?>:</b>
	<?php echo CHtml::encode($data->create_at); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('lastvisit_at')); ?>:</b>
	<?php echo CHtml::encode($data->lastvisit_at); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('superuser')); ?>:</b>
	<?php echo CHtml::encode($data->superuser); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('salt')); ?>:</b>
	<?php echo CHtml::encode($data->salt); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('requires_new_password')); ?>:</b>
	<?php echo CHtml::encode($data->requires_new_password); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('login_attempts')); ?>:</b>
	<?php echo CHtml::encode($data->login_attempts); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('login_time')); ?>:</b>
	<?php echo CHtml::encode($data->login_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('login_ip')); ?>:</b>
	<?php echo CHtml::encode($data->login_ip); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('activation_key')); ?>:</b>
	<?php echo CHtml::encode($data->activation_key); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('validation_key')); ?>:</b>
	<?php echo CHtml::encode($data->validation_key); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_time')); ?>:</b>
	<?php echo CHtml::encode($data->create_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('update_time')); ?>:</b>
	<?php echo CHtml::encode($data->update_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reset_token')); ?>:</b>
	<?php echo CHtml::encode($data->reset_token); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('profilepic')); ?>:</b>
	<?php echo CHtml::encode($data->profilepic); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('address')); ?>:</b>
	<?php echo CHtml::encode($data->address); ?>
	<br />

	*/ ?>

</div>