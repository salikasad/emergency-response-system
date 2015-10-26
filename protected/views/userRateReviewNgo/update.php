<?php
/* @var $this UserRateReviewNgoController */
/* @var $model UserRateReviewNgo */

$this->breadcrumbs=array(
	'User Rate Review Ngos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List UserRateReviewNgo', 'url'=>array('index')),
	array('label'=>'Create UserRateReviewNgo', 'url'=>array('create')),
	array('label'=>'View UserRateReviewNgo', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage UserRateReviewNgo', 'url'=>array('admin')),
);
?>

<h1>Update UserRateReviewNgo <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>