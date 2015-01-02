<?php
/* @var $this UmControlAlumnosController */
/* @var $model UmControlAlumnos */

$this->breadcrumbs=array(
	'Um Control Alumnoses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Lista ', 'url'=>array('index')),
	array('label'=>'Administrar ', 'url'=>array('admin')),
);
?>

<h1>Nuevo Ex-Alumno</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>