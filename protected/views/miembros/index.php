<?php
/* @var $this MiembrosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Miembros',
);

$this->menu=array(
	array('label'=>'Crear Miembros', 'url'=>array('create')),
	array('label'=>'Administrar Miembros', 'url'=>array('admin')),
);
?>

<h1>Miembros</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
