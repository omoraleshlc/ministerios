<?php
/* @var $this UmControlAlumnosController */
/* @var $model UmControlAlumnos */

$this->breadcrumbs=array(
	'Lista Ex-Alumnos'=>array('index'),
	$model->keyAlumnos=>array('view','id'=>$model->keyAlumnos),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Lista ', 'url'=>array('index')),
	array('label'=>'Crear', 'url'=>array('create')),
	array('label'=>'Ver', 'url'=>array('view', 'id'=>$model->keyAlumnos)),
	array('label'=>'Administrar', 'url'=>array('admin')),
);
?>

<h1>Actualizar Datos <?php echo $model->keyAlumnos; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>