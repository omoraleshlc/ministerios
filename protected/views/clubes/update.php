<?php
/* @var $this ClubesController */
/* @var $model Clubes */

$this->breadcrumbs=array(
	'Clubes'=>array('index'),
	$model->keyC=>array('view','id'=>$model->keyC),
	'Update',
);

$this->menu=array(
	array('label'=>'List Clubes', 'url'=>array('index')),
	array('label'=>'Create Clubes', 'url'=>array('create')),
	array('label'=>'View Clubes', 'url'=>array('view', 'id'=>$model->keyC)),
	array('label'=>'Manage Clubes', 'url'=>array('admin')),
);
?>

<h1>Update Clubes <?php echo $model->keyC; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>