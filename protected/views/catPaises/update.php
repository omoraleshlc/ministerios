<?php
/* @var $this CatPaisesController */
/* @var $model CatPaises */

$this->breadcrumbs=array(
	'Cat Paises'=>array('index'),
	$model->name=>array('view','id'=>$model->num),
	'Update',
);

$this->menu=array(
	array('label'=>'List CatPaises', 'url'=>array('index')),
	array('label'=>'Create CatPaises', 'url'=>array('create')),
	array('label'=>'View CatPaises', 'url'=>array('view', 'id'=>$model->num)),
	array('label'=>'Manage CatPaises', 'url'=>array('admin')),
);
?>

<h1>Update CatPaises <?php echo $model->num; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>