<?php
/* @var $this VolunteerFormController */
/* @var $model VolunteerForm */

$this->breadcrumbs=array(
	'Volunteer Forms'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List VolunteerForm', 'url'=>array('index')),
	array('label'=>'Manage VolunteerForm', 'url'=>array('admin')),
);
?>

<h1>Create VolunteerForm</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>