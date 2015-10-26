<?php
/* @var $this NgoController */
/* @var $model Ngo */

$this->breadcrumbs=array(
	'Ngos'=>array('index'),
	$model->Ngo_id,
);

$this->menu=array(
	array('label'=>'List Ngo', 'url'=>array('index')),
	array('label'=>'Create Ngo', 'url'=>array('create')),
	array('label'=>'Update Ngo', 'url'=>array('update', 'id'=>$model->Ngo_id)),
	array('label'=>'Delete Ngo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Ngo_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Ngo', 'url'=>array('admin')),
);
?>

<h1>View Ngo #<?php echo $model->Ngo_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Ngo_id',
		'Ngo_name',
		'username',
		'password',
		'email',
		'address',
		'upload_doc',
		'picture',
	),
)); ?>
