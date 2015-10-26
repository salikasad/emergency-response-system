<?php
/* @var $this UserUploadVideoController */
/* @var $model UserUploadVideo */

$this->breadcrumbs=array(
	'User Upload Videos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List UserUploadVideo', 'url'=>array('index')),
	array('label'=>'Create UserUploadVideo', 'url'=>array('create')),
	array('label'=>'View UserUploadVideo', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage UserUploadVideo', 'url'=>array('admin')),
);
?>

<h1>Update UserUploadVideo <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>