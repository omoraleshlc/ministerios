<?php
/* @var $this UmControlAlumnosController */
/* @var $model UmControlAlumnos */

$this->breadcrumbs=array(
	'Control de Alumnos, Ex-Alumnos'=>array('index'),
	'Busquedas',
);

$this->menu=array(
	array('label'=>'Lista Alumnos', 'url'=>array('index')),
	array('label'=>'Agregar Alumnos', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#um-control-alumnos-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar</h1>



<?php echo CHtml::link('Búsqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'um-control-alumnos-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		
            'matricula',
                'nombre1',
		'nombre2',
		'apellidos1',
		'apellidos2',
            
		/*
                 'Gen',
                 
		'vive',
		'matricula',
		'apellidos1',
		'apellidos2',
		'keyAlumnos',
		'nombre1',
		'nombre2',
		'Hermanos',
		'fechaNacimiento',
		'lugarNacimiento',
		'pais',
		'Nacionalidad',
		'region',
		'Estadocivil',
		'Conyuge',
		'ConyugeExaUM',
		'NombreFacebook',
		'URLFacebook',
		'Puesto',
		'viveEn',
		'Ciudad',
		'Postgrado',
		'Especialidad',
		'Subespecialidad',
		'Maestria',
		'Residencia',
		'Twitter',
		'email1',
		'email2',
		'telCasa',
		'telTrabajo',
		'telCelular',
		'ciudadResidencia',
		'direccion',
		'Trabajo',
		'Trabajo2',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
