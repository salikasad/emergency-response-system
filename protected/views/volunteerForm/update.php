<?php
/* @var $this VolunteerFormController */
/* @var $model VolunteerForm */

$this->breadcrumbs=array(
	'Volunteer Forms'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List VolunteerForm', 'url'=>array('index')),
	array('label'=>'Create VolunteerForm', 'url'=>array('create')),
	array('label'=>'View VolunteerForm', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage VolunteerForm', 'url'=>array('admin')),
);
?>

<h1>Update VolunteerForm <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>