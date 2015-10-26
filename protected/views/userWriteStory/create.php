<?php
/* @var $this UserWriteStoryController */
/* @var $model UserWriteStory */

$this->breadcrumbs=array(
	'User Write Stories'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List UserWriteStory', 'url'=>array('index')),
	array('label'=>'Manage UserWriteStory', 'url'=>array('admin')),
);
?>

<h1>Create UserWriteStory</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>