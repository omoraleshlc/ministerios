<?php
/* @var $this IglesiasController */
/* @var $model Iglesias */

$this->breadcrumbs=array(
	'Iglesiases'=>array('index'),
	$model->keyIglesias=>array('view','id'=>$model->keyIglesias),
	'Update',
);

$this->menu=array(
	array('label'=>'List Iglesias', 'url'=>array('index')),
	array('label'=>'Create Iglesias', 'url'=>array('create')),
	array('label'=>'View Iglesias', 'url'=>array('view', 'id'=>$model->keyIglesias)),
	array('label'=>'Manage Iglesias', 'url'=>array('admin')),
);
?>

<h1>Update Iglesias <?php echo $model->keyIglesias; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>