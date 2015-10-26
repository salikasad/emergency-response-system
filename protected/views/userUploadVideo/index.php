<?php
/* @var $this UserUploadVideoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'User Upload Videos',
);

$this->menu=array(
	array('label'=>'Create UserUploadVideo', 'url'=>array('create')),
	array('label'=>'Manage UserUploadVideo', 'url'=>array('admin')),
);
?>

<h1>User Upload Videos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
