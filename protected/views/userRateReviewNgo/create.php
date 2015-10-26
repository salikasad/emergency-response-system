<?php
/* @var $this UserRateReviewNgoController */
/* @var $model UserRateReviewNgo */

$this->breadcrumbs=array(
	'User Rate Review Ngos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List UserRateReviewNgo', 'url'=>array('index')),
	array('label'=>'Manage UserRateReviewNgo', 'url'=>array('admin')),
);
?>

<h1>Create UserRateReviewNgo</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>