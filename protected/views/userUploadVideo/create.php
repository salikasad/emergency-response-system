<?php
/* @var $this UserUploadVideoController */
/* @var $model UserUploadVideo */

$this->breadcrumbs=array(
	'User Upload Videos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List UserUploadVideo', 'url'=>array('index')),
	array('label'=>'Manage UserUploadVideo', 'url'=>array('admin')),
);
?>

<h1>Create UserUploadVideo</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>