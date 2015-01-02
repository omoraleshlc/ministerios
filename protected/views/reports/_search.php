<?php
/* @var $this UmControlAlumnosController */
/* @var $model UmControlAlumnos */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>





	<div class="row">
		<?php echo $form->label($model,'matricula'); ?>
		<?php echo $form->textField($model,'matricula'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'apellidos1'); ?>
		<?php echo $form->textField($model,'apellidos1',array('size'=>24,'maxlength'=>24)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'apellidos2'); ?>
		<?php echo $form->textField($model,'apellidos2',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre1'); ?>
		<?php echo $form->textField($model,'nombre1',array('size'=>13,'maxlength'=>13)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre2'); ?>
		<?php echo $form->textField($model,'nombre2',array('size'=>19,'maxlength'=>19)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Hermanos'); ?>
		<?php echo $form->textField($model,'Hermanos',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fechaNacimiento'); ?>
		<?php echo $form->textField($model,'fechaNacimiento',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lugarNacimiento'); ?>
		<?php echo $form->textField($model,'lugarNacimiento',array('size'=>26,'maxlength'=>26)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pais'); ?>
		<?php echo $form->textField($model,'pais',array('size'=>21,'maxlength'=>21)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Nacionalidad'); ?>
		<?php echo $form->textField($model,'Nacionalidad',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'region'); ?>
		<?php echo $form->textField($model,'region',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Estadocivil'); ?>
		<?php echo $form->textField($model,'Estadocivil',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Conyuge'); ?>
		<?php echo $form->textField($model,'Conyuge',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ConyugeExaUM'); ?>
		<?php echo $form->textField($model,'ConyugeExaUM',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NombreFacebook'); ?>
		<?php echo $form->textField($model,'NombreFacebook',array('size'=>27,'maxlength'=>27)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'URLFacebook'); ?>
		<?php echo $form->textField($model,'URLFacebook',array('size'=>59,'maxlength'=>59)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Puesto'); ?>
		<?php echo $form->textField($model,'Puesto',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'viveEn'); ?>
		<?php echo $form->textField($model,'viveEn',array('size'=>24,'maxlength'=>24)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Ciudad'); ?>
		<?php echo $form->textField($model,'Ciudad',array('size'=>21,'maxlength'=>21)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Postgrado'); ?>
		<?php echo $form->textField($model,'Postgrado',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Especialidad'); ?>
		<?php echo $form->textField($model,'Especialidad',array('size'=>37,'maxlength'=>37)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Subespecialidad'); ?>
		<?php echo $form->textField($model,'Subespecialidad',array('size'=>28,'maxlength'=>28)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Maestria'); ?>
		<?php echo $form->textField($model,'Maestria',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Residencia'); ?>
		<?php echo $form->textField($model,'Residencia',array('size'=>26,'maxlength'=>26)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Twitter'); ?>
		<?php echo $form->textField($model,'Twitter',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'email1'); ?>
		<?php echo $form->textField($model,'email1',array('size'=>38,'maxlength'=>38)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'email2'); ?>
		<?php echo $form->textField($model,'email2',array('size'=>37,'maxlength'=>37)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'telCasa'); ?>
		<?php echo $form->textField($model,'telCasa',array('size'=>17,'maxlength'=>17)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'telTrabajo'); ?>
		<?php echo $form->textField($model,'telTrabajo',array('size'=>17,'maxlength'=>17)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'telCelular'); ?>
		<?php echo $form->textField($model,'telCelular',array('size'=>18,'maxlength'=>18)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ciudadResidencia'); ?>
		<?php echo $form->textField($model,'ciudadResidencia',array('size'=>36,'maxlength'=>36)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'direccion'); ?>
		<?php echo $form->textField($model,'direccion',array('size'=>60,'maxlength'=>66)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Trabajo'); ?>
		<?php echo $form->textField($model,'Trabajo',array('size'=>48,'maxlength'=>48)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Trabajo2'); ?>
		<?php echo $form->textField($model,'Trabajo2',array('size'=>42,'maxlength'=>42)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->