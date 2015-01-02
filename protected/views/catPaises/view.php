<?php
/* @var $this CatPaisesController */
/* @var $model CatPaises */

$this->breadcrumbs=array(
	'Cat Paises'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List CatPaises', 'url'=>array('index')),
	array('label'=>'Create CatPaises', 'url'=>array('create')),
	array('label'=>'Update CatPaises', 'url'=>array('update', 'id'=>$model->num)),
	array('label'=>'Delete CatPaises', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->num),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CatPaises', 'url'=>array('admin')),
);
?>

<h1>View CatPaises #<?php echo $model->num; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'num',
		'name',
		'alpha2',
		'alpha3',
		'latitude',
		'longitude',
	),
)); ?>
