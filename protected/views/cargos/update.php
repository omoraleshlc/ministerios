<?php
/* @var $this CargosController */
/* @var $model Cargos */

$this->breadcrumbs=array(
	'Cargos'=>array('index'),
	$model->keyCargos=>array('view','id'=>$model->keyCargos),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Lista Cargos', 'url'=>array('index')),
	array('label'=>'Crear Cargos', 'url'=>array('create')),
	array('label'=>'Ver Cargos', 'url'=>array('view', 'id'=>$model->keyCargos)),
	array('label'=>'Administrar Cargos', 'url'=>array('admin')),
);
?>

<h1>Agregar Cargos <?php echo $model->keyCargos; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>