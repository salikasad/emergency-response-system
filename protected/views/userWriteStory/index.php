<?php
/* @var $this UserWriteStoryController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'User Write Stories',
);

$this->menu=array(
	array('label'=>'Create UserWriteStory', 'url'=>array('create')),
	array('label'=>'Manage UserWriteStory', 'url'=>array('admin')),
);
?>

<h1>User Write Stories</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
