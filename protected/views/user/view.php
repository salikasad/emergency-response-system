<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->user_id,
);

$this->menu=array(
	array('label'=>'List User', 'url'=>array('index')),
	array('label'=>'Create User', 'url'=>array('create')),
	array('label'=>'Update User', 'url'=>array('update', 'id'=>$model->user_id)),
	array('label'=>'Delete User', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->user_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage User', 'url'=>array('admin')),
);
?>

<h1>View User #<?php echo $model->user_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'user_id',
		'username',
		'password',
		'email',
		'gender',
		'activekey',
		'create_at',
		'lastvisit_at',
		'superuser',
		'status',
		'salt',
		'requires_new_password',
		'login_attempts',
		'login_time',
		'login_ip',
		'activation_key',
		'validation_key',
		'create_time',
		'update_time',
		'reset_token',
		'profilepic',
		'address',
	),
)); ?>
