<?php
/* @var $this UmControlAlumnosController */
/* @var $model UmControlAlumnos */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'um-control-alumnos-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Generacion Ej: 1970'); ?>
		<?php echo $form->textField($model,'Gen'); ?>
		<?php echo $form->error($model,'Gen'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Vive?'); ?>
		<?php echo $form->textField($model,'vive',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'vive'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'matricula'); ?>
		<?php echo $form->textField($model,'matricula'); ?>
		<?php echo $form->error($model,'matricula'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'apellidos1'); ?>
		<?php echo $form->textField($model,'apellidos1',array('size'=>24,'maxlength'=>24)); ?>
		<?php echo $form->error($model,'apellidos1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'apellidos2'); ?>
		<?php echo $form->textField($model,'apellidos2',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'apellidos2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre1'); ?>
		<?php echo $form->textField($model,'nombre1',array('size'=>13,'maxlength'=>13)); ?>
		<?php echo $form->error($model,'nombre1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre2'); ?>
		<?php echo $form->textField($model,'nombre2',array('size'=>19,'maxlength'=>19)); ?>
		<?php echo $form->error($model,'nombre2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Hermanos'); ?>
		<?php echo $form->textField($model,'Hermanos',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'Hermanos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fechaNacimiento'); ?>
		<?php echo $form->textField($model,'fechaNacimiento',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'fechaNacimiento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lugarNacimiento'); ?>
		<?php echo $form->textField($model,'lugarNacimiento',array('size'=>26,'maxlength'=>26)); ?>
		<?php echo $form->error($model,'lugarNacimiento'); ?>
	</div>


        

        
        
        
      
        
        
        
        
 <!-- INICIO COMBOS DEPENDIENTES -->
<div class="row">
       <?php echo $form->labelEx($model,'País de Nacimiento'); ?>
       <?php
             $departamento = new CDbCriteria;
             $departamento->order = 'name ASC';
       ?>
       <?php
             echo $form->dropDownList($model,'pais',CHtml::listData(CatPaises::model()->findAll($departamento),'num','name'),
                       array(
                           'ajax' => array(
                           'type' => 'POST',
                           'url' => CController::createUrl('CombosDependientes/dynamicMunicipios'),
                           'update' => '#CombosDependientes_codMunicipio'
                       ),'prompt' => 'Seleccione un País...'
                 )
             );
       ?>
       <?php //echo $form->error($model,'codDepartamento'); ?>
   </div>
 
     
        
        
        
        
        
        
        
        
        
        
        
       
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        

	<div class="row">
		<?php echo $form->labelEx($model,'Nacionalidad'); ?>
		<?php echo $form->textField($model,'Nacionalidad',array('size'=>14,'maxlength'=>14)); ?>
		<?php echo $form->error($model,'Nacionalidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Región'); ?>
		<?php echo $form->textField($model,'region',array('size'=>14,'maxlength'=>14)); ?>
		<?php echo $form->error($model,'region'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Estado Civil'); ?>
		<?php echo $form->textField($model,'Estadocivil',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'Estadocivil'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Conyuge'); ?>
		<?php echo $form->textField($model,'Conyuge',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'Conyuge'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Su Cónyuge es Ex Alumno?'); ?>
		<?php echo $form->textField($model,'ConyugeExaUM',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'ConyugeExaUM'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Nombre en Facebook'); ?>
		<?php echo $form->textField($model,'NombreFacebook',array('size'=>27,'maxlength'=>27)); ?>
		<?php echo $form->error($model,'NombreFacebook'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Direccion Web Facebook'); ?>
		<?php echo $form->textField($model,'URLFacebook',array('size'=>59,'maxlength'=>59)); ?>
		<?php echo $form->error($model,'URLFacebook'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Puesto'); ?>
		<?php echo $form->textField($model,'Puesto',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'Puesto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'vive en'); ?>
		<?php echo $form->textField($model,'viveEn',array('size'=>24,'maxlength'=>24)); ?>
		<?php echo $form->error($model,'viveEn'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Ciudad'); ?>
		<?php echo $form->textField($model,'Ciudad',array('size'=>21,'maxlength'=>21)); ?>
		<?php echo $form->error($model,'Ciudad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Tiene algún postgrado?'); ?>
		<?php echo $form->textField($model,'Postgrado',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'Postgrado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Especialidad'); ?>
		<?php echo $form->textField($model,'Especialidad',array('size'=>37,'maxlength'=>37)); ?>
		<?php echo $form->error($model,'Especialidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Subespecialidad'); ?>
		<?php echo $form->textField($model,'Subespecialidad',array('size'=>28,'maxlength'=>28)); ?>
		<?php echo $form->error($model,'Subespecialidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Maestria en'); ?>
		<?php echo $form->textField($model,'Maestria',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'Maestria'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Residencia'); ?>
		<?php echo $form->textField($model,'Residencia',array('size'=>26,'maxlength'=>26)); ?>
		<?php echo $form->error($model,'Residencia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Twitter'); ?>
		<?php echo $form->textField($model,'Twitter',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'Twitter'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email1'); ?>
		<?php echo $form->textField($model,'email1',array('size'=>38,'maxlength'=>38)); ?>
		<?php echo $form->error($model,'email1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email2'); ?>
		<?php echo $form->textField($model,'email2',array('size'=>37,'maxlength'=>37)); ?>
		<?php echo $form->error($model,'email2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Teléfono de Casa'); ?>
		<?php echo $form->textField($model,'telCasa',array('size'=>17,'maxlength'=>17)); ?>
		<?php echo $form->error($model,'telCasa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Teléfono de Trabajo'); ?>
		<?php echo $form->textField($model,'telTrabajo',array('size'=>17,'maxlength'=>17)); ?>
		<?php echo $form->error($model,'telTrabajo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Teléfono Móvil'); ?>
		<?php echo $form->textField($model,'telCelular',array('size'=>18,'maxlength'=>18)); ?>
		<?php echo $form->error($model,'telCelular'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Ciudad donde reside actualmente'); ?>
		<?php echo $form->textField($model,'ciudadResidencia',array('size'=>36,'maxlength'=>36)); ?>
		<?php echo $form->error($model,'ciudadResidencia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Dirección'); ?>
		<?php echo $form->textField($model,'direccion',array('size'=>60,'maxlength'=>66)); ?>
		<?php echo $form->error($model,'direccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Trabajo'); ?>
		<?php echo $form->textField($model,'Trabajo',array('size'=>48,'maxlength'=>48)); ?>
		<?php echo $form->error($model,'Trabajo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Trabajo2'); ?>
		<?php echo $form->textField($model,'Trabajo2',array('size'=>42,'maxlength'=>42)); ?>
		<?php echo $form->error($model,'Trabajo2'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->