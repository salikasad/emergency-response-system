<?php
/* @var $this NgoController */
/* @var $data Ngo */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Ngo_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Ngo_id), array('view', 'id'=>$data->Ngo_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Ngo_name')); ?>:</b>
	<?php echo CHtml::encode($data->Ngo_name); ?>
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('address')); ?>:</b>
	<?php echo CHtml::encode($data->address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('upload_doc')); ?>:</b>
	<?php echo CHtml::encode($data->upload_doc); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('picture')); ?>:</b>
	<?php echo CHtml::encode($data->picture); ?>
	<br />

	*/ ?>

</div>