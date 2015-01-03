<?php
/* @var $this IglesiasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Iglesias',
);

$this->menu=array(
	array('label'=>'Agregar Iglesia', 'url'=>array('create')),
	array('label'=>'Administrar Iglesia', 'url'=>array('admin')),
);
?>

<h1>Catálogo de Iglesias</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
