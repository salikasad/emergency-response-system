<?php
/* @var $this NgoController */
/* @var $model Ngo */

$this->breadcrumbs=array(
	'Ngos'=>array('index'),
	$model->Ngo_id=>array('view','id'=>$model->Ngo_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Ngo', 'url'=>array('index')),
	array('label'=>'Create Ngo', 'url'=>array('create')),
	array('label'=>'View Ngo', 'url'=>array('view', 'id'=>$model->Ngo_id)),
	array('label'=>'Manage Ngo', 'url'=>array('admin')),
);
?>

<h1>Update Ngo <?php echo $model->Ngo_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>