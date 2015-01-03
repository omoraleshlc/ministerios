<?php
/* @var $this ClubesController */
/* @var $model Clubes */

$this->breadcrumbs=array(
	'Clubes'=>array('index'),
	$model->keyC,
);

$this->menu=array(
	array('label'=>'List Clubes', 'url'=>array('index')),
	array('label'=>'Create Clubes', 'url'=>array('create')),
	array('label'=>'Update Clubes', 'url'=>array('update', 'id'=>$model->keyC)),
	array('label'=>'Delete Clubes', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->keyC),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Clubes', 'url'=>array('admin')),
);
?>

<h1>View Clubes #<?php echo $model->keyC; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'keyC',
		'descripcion',
		'iglesia',
	),
)); ?>
