<?php
/* @var $this UserJoinEventController */
/* @var $model UserJoinEvent */

$this->breadcrumbs=array(
	'User Join Events'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List UserJoinEvent', 'url'=>array('index')),
	array('label'=>'Create UserJoinEvent', 'url'=>array('create')),
	array('label'=>'Update UserJoinEvent', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete UserJoinEvent', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage UserJoinEvent', 'url'=>array('admin')),
);
?>

<h1>View UserJoinEvent #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'User_user_id',
		'event_event_id',
	),
)); ?>
