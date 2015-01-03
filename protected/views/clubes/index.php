<?php
/* @var $this ClubesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Clubes',
);

$this->menu=array(
	array('label'=>'Create Clubes', 'url'=>array('create')),
	array('label'=>'Manage Clubes', 'url'=>array('admin')),
);
?>

<h1>Clubes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
