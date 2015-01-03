<?php
/* @var $this ClubesController */
/* @var $model Clubes */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'clubes-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcion'); ?>
		<?php echo $form->textField($model,'descripcion',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'descripcion'); ?>
	</div>


        
        <div class="row"> 
             <?php //echo $form->labelEx($model,'País de Nacimiento'); ?>
       <?php
             $departamento = new CDbCriteria;
             $departamento->order = 'descripcion ASC';
       ?>
       <?php
             echo $form->dropDownList($model,'iglesia',CHtml::listData(Iglesias::model()->findAll($departamento),'keyI','descripcion'),
                       array(
                           'ajax' => array(
                           'type' => 'POST',
                           'url' => CController::createUrl('CombosDependientes/dynamicMunicipios'),
                           'update' => '#CombosDependientes_codMunicipio'
                       ),'prompt' => 'Iglesia a donde pertenece...'
                 )
             );
       ?>
       <?php //echo $form->error($model,'codDepartamento'); ?>     
        </div>    

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->