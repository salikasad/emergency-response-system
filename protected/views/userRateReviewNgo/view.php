<?php
/* @var $this UserRateReviewNgoController */
/* @var $model UserRateReviewNgo */

$this->breadcrumbs=array(
	'User Rate Review Ngos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List UserRateReviewNgo', 'url'=>array('index')),
	array('label'=>'Create UserRateReviewNgo', 'url'=>array('create')),
	array('label'=>'Update UserRateReviewNgo', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete UserRateReviewNgo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage UserRateReviewNgo', 'url'=>array('admin')),
);
?>

<h1>View UserRateReviewNgo #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'rate',
		'review',
		'User_user_id',
		'Ngo_Ngo_id',
	),
)); ?>
