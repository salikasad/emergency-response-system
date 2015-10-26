<?php
/* @var $this VolunteerFormController */
/* @var $model VolunteerForm */

$this->breadcrumbs=array(
	'Volunteer Forms'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List VolunteerForm', 'url'=>array('index')),
	array('label'=>'Create VolunteerForm', 'url'=>array('create')),
	array('label'=>'Update VolunteerForm', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete VolunteerForm', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage VolunteerForm', 'url'=>array('admin')),
);
?>

<h1>View VolunteerForm #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'team_name',
		'name_of_ngo',
		'email',
		'address',
		'no_of_members',
		'experience',
		'User_user_id',
	),
)); ?>
