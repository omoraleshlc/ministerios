<?php
/* @var $this IglesiasController */
/* @var $model Iglesias */

$this->breadcrumbs=array(
	'Iglesias'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Lista Iglesias', 'url'=>array('index')),
	array('label'=>'Administrar Iglesias', 'url'=>array('admin')),
);
?>

<h1>Agregar una Iglesia</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>