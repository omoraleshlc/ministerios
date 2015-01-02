<?php
/* @var $this CatPaisesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cat Paises',
);

$this->menu=array(
	array('label'=>'Create CatPaises', 'url'=>array('create')),
	array('label'=>'Manage CatPaises', 'url'=>array('admin')),
);
?>

<h1>Cat Paises</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
