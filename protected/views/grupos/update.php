<?php
/* @var $this GruposController */
/* @var $model Grupos */

$this->breadcrumbs=array(
	'Grupos'=>array('index'),
	$model->keyGrupos=>array('view','id'=>$model->keyGrupos),
	'Update',
);

$this->menu=array(
	array('label'=>'Lista Grupos', 'url'=>array('index')),
	array('label'=>'Crear Grupos', 'url'=>array('create')),
	array('label'=>'Ver Grupos', 'url'=>array('view', 'id'=>$model->keyGrupos)),
	array('label'=>'Administrar Grupos', 'url'=>array('admin')),
);
?>

<h1>Actualizar Grupos/Clases <?php echo $model->keyGrupos; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>