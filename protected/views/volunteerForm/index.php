<?php
/* @var $this VolunteerFormController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Volunteer Forms',
);

$this->menu=array(
	array('label'=>'Create VolunteerForm', 'url'=>array('create')),
	array('label'=>'Manage VolunteerForm', 'url'=>array('admin')),
);
?>

<h1>Volunteer Forms</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
