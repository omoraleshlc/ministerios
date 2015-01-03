<?php
/* @var $this MiembrosController */
/* @var $model Miembros */

$this->breadcrumbs=array(
	'Miembros'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Lista Miembros', 'url'=>array('index')),
	array('label'=>'Administrar Miembros', 'url'=>array('admin')),
);
?>

<h1>Crear/Alta Miembros</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>