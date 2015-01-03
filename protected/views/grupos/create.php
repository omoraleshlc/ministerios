<?php
/* @var $this GruposController */
/* @var $model Grupos */

$this->breadcrumbs=array(
	'Grupos'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Lista Grupos', 'url'=>array('index')),
	array('label'=>'Administrar Grupos', 'url'=>array('admin')),
);
?>

<h1>Crear Grupos/Clases</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>