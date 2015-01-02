<?php
/* @var $this UmControlAlumnosController */
/* @var $model UmControlAlumnos */

$this->breadcrumbs=array(
	'Ex-Alumnos'=>array('index'),
	$model->keyAlumnos,
);

$this->menu=array(
	array('label'=>'Lista', 'url'=>array('index')),
	array('label'=>'Nuevo ', 'url'=>array('create')),
	array('label'=>'Actualizar', 'url'=>array('update', 'id'=>$model->keyAlumnos)),
	array('label'=>'Eliminar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->keyAlumnos),'confirm'=>'Estas seguro que quieres eliminar este registro?')),
	array('label'=>'Administrar', 'url'=>array('admin')),
);
?>

<h1>Lista de Ex-Alumnos <?php echo $model->keyAlumnos; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'keyAlumnos',
		'Gen',
		'vive',
		'matricula',
		'apellidos1',
		'apellidos2',
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
	),
)); ?>
