<?php
/* @var $this UserJoinEventController */
/* @var $model UserJoinEvent */

$this->breadcrumbs=array(
	'User Join Events'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List UserJoinEvent', 'url'=>array('index')),
	array('label'=>'Manage UserJoinEvent', 'url'=>array('admin')),
);
?>

<h1>Create UserJoinEvent</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>