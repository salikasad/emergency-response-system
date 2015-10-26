<?php
/* @var $this UserJoinEventController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'User Join Events',
);

$this->menu=array(
	array('label'=>'Create UserJoinEvent', 'url'=>array('create')),
	array('label'=>'Manage UserJoinEvent', 'url'=>array('admin')),
);
?>

<h1>User Join Events</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
