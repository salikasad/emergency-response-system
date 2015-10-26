<?php
/* @var $this UserJoinEventController */
/* @var $model UserJoinEvent */

$this->breadcrumbs=array(
	'User Join Events'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List UserJoinEvent', 'url'=>array('index')),
	array('label'=>'Create UserJoinEvent', 'url'=>array('create')),
	array('label'=>'View UserJoinEvent', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage UserJoinEvent', 'url'=>array('admin')),
);
?>

<h1>Update UserJoinEvent <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>