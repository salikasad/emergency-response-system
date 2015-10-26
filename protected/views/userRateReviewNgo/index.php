<?php
/* @var $this UserRateReviewNgoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'User Rate Review Ngos',
);

$this->menu=array(
	array('label'=>'Create UserRateReviewNgo', 'url'=>array('create')),
	array('label'=>'Manage UserRateReviewNgo', 'url'=>array('admin')),
);
?>

<h1>User Rate Review Ngos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
