<?php
/* @var $this MiembrosController */
/* @var $model Miembros */

$this->breadcrumbs=array(
	'Miembros'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Lista Miembros', 'url'=>array('index')),
	array('label'=>'Crear Miembros', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#miembros-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Miembros</h1>

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
	'id'=>'miembros-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'KeyM',
		'nombre',
		'grupo',
		'fechaNacimiento',
		'fechaBautismo',
		'telefonoCasa',
		/*
		'telefonoPrivado',
		'direccion',
		'iglesia',
		'status',
		'cargo1',
		'cargo2',
		'cargo3',
		'club1',
		'club2',
		'club3',
		'fecha',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
