<?php
/* @var $this UmControlAlumnosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ex-Alumnos',
);

$this->menu=array(
	array('label'=>'Agregar', 'url'=>array('create')),
	array('label'=>'Administrar ', 'url'=>array('admin')),
);
?>

<h1>Lista Ex-Alumnos <span class="glyphicon glyphicon-list"></span></h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
