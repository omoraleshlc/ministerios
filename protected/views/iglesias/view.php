<?php
/* @var $this IglesiasController */
/* @var $model Iglesias */

$this->breadcrumbs=array(
	'Iglesias'=>array('index'),
	$model->keyIglesias,
);

$this->menu=array(
	array('label'=>'Lista Iglesias', 'url'=>array('index')),
	array('label'=>'Crear Iglesias', 'url'=>array('create')),
	array('label'=>'Actualizar Iglesias', 'url'=>array('update', 'id'=>$model->keyIglesias)),
	array('label'=>'Eliminar Iglesias', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->keyIglesias),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Iglesias', 'url'=>array('admin')),
);
?>

<h1>Ver #<?php echo $model->keyIglesias; ?> de iglesia</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'keyIglesias',
		'descripcion',
	),
)); ?>
