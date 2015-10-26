<?php
/* @var $this UserUploadVideoController */
/* @var $model UserUploadVideo */

$this->breadcrumbs=array(
	'User Upload Videos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List UserUploadVideo', 'url'=>array('index')),
	array('label'=>'Create UserUploadVideo', 'url'=>array('create')),
	array('label'=>'Update UserUploadVideo', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete UserUploadVideo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage UserUploadVideo', 'url'=>array('admin')),
);
?>

<h1>View UserUploadVideo #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'User_user_id',
		'video_video_id',
	),
)); ?>
