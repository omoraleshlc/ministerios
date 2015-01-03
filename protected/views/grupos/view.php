<?php
/* @var $this GruposController */
/* @var $model Grupos */

$this->breadcrumbs=array(
	'Grupos'=>array('index'),
	$model->keyGrupos,
);

$this->menu=array(
	array('label'=>'Lista Grupos', 'url'=>array('index')),
	array('label'=>'Crear Grupos', 'url'=>array('create')),
	array('label'=>'Actualizar Grupos', 'url'=>array('update', 'id'=>$model->keyGrupos)),
	array('label'=>'Eliminar Grupos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->keyGrupos),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Grupos', 'url'=>array('admin')),
);
?>

<h1>Ver Grupos/Clases<?php echo $model->keyGrupos; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'keyGrupos',
		'descripcion',
		'nombreLider',
		'fecha',
	),
)); ?>
