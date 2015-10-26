<?php
/* @var $this NgoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ngos',
);

$this->menu=array(
	array('label'=>'Create Ngo', 'url'=>array('create')),
	array('label'=>'Manage Ngo', 'url'=>array('admin')),
);
?>

<h1>Ngos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
