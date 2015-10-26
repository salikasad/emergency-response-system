<?php
/* @var $this NgoController */
/* @var $model Ngo */

$this->breadcrumbs=array(
	'Ngos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Ngo', 'url'=>array('index')),
	array('label'=>'Manage Ngo', 'url'=>array('admin')),
);
?>

<h1>Create Ngo</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>