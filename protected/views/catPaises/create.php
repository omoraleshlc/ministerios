<?php
/* @var $this CatPaisesController */
/* @var $model CatPaises */

$this->breadcrumbs=array(
	'Cat Paises'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CatPaises', 'url'=>array('index')),
	array('label'=>'Manage CatPaises', 'url'=>array('admin')),
);
?>

<h1>Create CatPaises</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>