<?php
/* @var $this MiembrosController */
/* @var $model Miembros */

$this->breadcrumbs=array(
	'Miembros'=>array('index'),
	$model->KeyM,
);

$this->menu=array(
	array('label'=>'Lista Miembros', 'url'=>array('index')),
	array('label'=>'Crear Miembros', 'url'=>array('create')),
	array('label'=>'Actualizar Miembros', 'url'=>array('update', 'id'=>$model->KeyM)),
	array('label'=>'Eliminar Miembros', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->KeyM),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Miembros', 'url'=>array('admin')),
);
?>

<h1> Miembro <?php echo $model->KeyM; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'KeyM',
		'nombre',
		'grupo',
		'fechaNacimiento',
		'fechaBautismo',
		'telefonoCasa',
		'telefonoPrivado',
		'direccion',
		'iglesia',
		'status',
		'cargo1',
		'cargo2',
		'cargo3',
		'club1',
		'club2',
		'club3',
		'fecha',
	),
)); ?>
