<?php
/* @var $this MiembrosController */
/* @var $model Miembros */

$this->breadcrumbs=array(
	'Miembros'=>array('index'),
	$model->KeyM=>array('view','id'=>$model->KeyM),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Lista Miembros', 'url'=>array('index')),
	array('label'=>'Crear Miembros', 'url'=>array('create')),
	array('label'=>'Ver Miembros', 'url'=>array('view', 'id'=>$model->KeyM)),
	array('label'=>'Administrar Miembros', 'url'=>array('admin')),
);
?>

<h1>Actualizar Miembros <?php echo $model->KeyM; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>