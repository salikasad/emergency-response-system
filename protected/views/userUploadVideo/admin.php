<?php
/* @var $this UserUploadVideoController */
/* @var $model UserUploadVideo */

$this->breadcrumbs=array(
	'User Upload Videos'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List UserUploadVideo', 'url'=>array('index')),
	array('label'=>'Create UserUploadVideo', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#user-upload-video-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage User Upload Videos</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'user-upload-video-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'User_user_id',
		'video_video_id',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
