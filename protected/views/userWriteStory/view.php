<?php
/* @var $this UserWriteStoryController */
/* @var $model UserWriteStory */

$this->breadcrumbs=array(
	'User Write Stories'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List UserWriteStory', 'url'=>array('index')),
	array('label'=>'Create UserWriteStory', 'url'=>array('create')),
	array('label'=>'Update UserWriteStory', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete UserWriteStory', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage UserWriteStory', 'url'=>array('admin')),
);
?>

<h1>View UserWriteStory #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'User_user_id',
		'story_story_id',
	),
)); ?>
