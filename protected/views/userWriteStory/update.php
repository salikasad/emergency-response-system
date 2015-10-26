<?php
/* @var $this UserWriteStoryController */
/* @var $model UserWriteStory */

$this->breadcrumbs=array(
	'User Write Stories'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List UserWriteStory', 'url'=>array('index')),
	array('label'=>'Create UserWriteStory', 'url'=>array('create')),
	array('label'=>'View UserWriteStory', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage UserWriteStory', 'url'=>array('admin')),
);
?>

<h1>Update UserWriteStory <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>