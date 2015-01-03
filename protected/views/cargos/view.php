<?php
/* @var $this CargosController */
/* @var $model Cargos */

$this->breadcrumbs=array(
	'Cargos'=>array('index'),
	$model->keyCargos,
);

$this->menu=array(
	array('label'=>'Lista Cargos', 'url'=>array('index')),
	array('label'=>'Crear Cargos', 'url'=>array('create')),
	array('label'=>'Actualizar Cargos', 'url'=>array('update', 'id'=>$model->keyCargos)),
	array('label'=>'Eliminar Cargos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->keyCargos),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Cargos', 'url'=>array('admin')),
);
?>

<h1>Ver Cargos <?php echo $model->keyCargos; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'keyCargos',
		'descripcion',
	),
)); ?>
