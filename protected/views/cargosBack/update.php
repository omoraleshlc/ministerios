<?php
/* @var $this CargosController */
/* @var $model Cargos */

$this->breadcrumbs=array(
	'Cargoses'=>array('index'),
	$model->keyCargos=>array('view','id'=>$model->keyCargos),
	'Update',
);

$this->menu=array(
	array('label'=>'List Cargos', 'url'=>array('index')),
	array('label'=>'Create Cargos', 'url'=>array('create')),
	array('label'=>'View Cargos', 'url'=>array('view', 'id'=>$model->keyCargos)),
	array('label'=>'Manage Cargos', 'url'=>array('admin')),
);
?>

<h1>Update Cargos <?php echo $model->keyCargos; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>