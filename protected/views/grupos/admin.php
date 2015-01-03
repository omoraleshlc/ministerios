<?php
/* @var $this GruposController */
/* @var $model Grupos */

$this->breadcrumbs=array(
	'Grupos'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Lista Grupos', 'url'=>array('index')),
	array('label'=>'Crear Grupos', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#grupos-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Grupos/Clases</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Búsqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'grupos-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'keyGrupos',
		'descripcion',
		'nombreLider',
		'fecha',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
