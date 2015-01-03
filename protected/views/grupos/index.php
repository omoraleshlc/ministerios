<?php
/* @var $this GruposController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Grupos',
);

$this->menu=array(
	array('label'=>'Crear Grupos', 'url'=>array('create')),
	array('label'=>'Administrar Grupos', 'url'=>array('admin')),
);
?>

<h1>Lista de Grupos/Clases</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
