<?php
/* @var $this ClubesController */
/* @var $model Clubes */

$this->breadcrumbs=array(
	'Clubes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Clubes', 'url'=>array('index')),
	array('label'=>'Manage Clubes', 'url'=>array('admin')),
);
?>

<h1>Create Clubes</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>