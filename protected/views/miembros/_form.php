<?php
/* @var $this MiembrosController */
/* @var $model Miembros */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'miembros-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

        <div class="row"> 
             <?php //echo $form->labelEx($model,'País de Nacimiento'); ?>
       <?php
             $grupo = new CDbCriteria;
             $grupo->order = 'descripcion ASC';
       ?>
       <?php
             echo $form->dropDownList($model,'grupo',CHtml::listData(Grupos::model()->findAll($grupo),'keyGrupo','descripcion'),
                       array(
                           'ajax' => array(
                           'type' => 'POST',
                           'url' => CController::createUrl('CombosDependientes/dynamicMunicipios'),
                           'update' => '#CombosDependientes_codMunicipio'
                       ),'prompt' => 'Grupos Pequeños ...'
                 )
             );
       ?>
       <?php //echo $form->error($model,'codDepartamento'); ?>     
        </div>     

	<div class="row">
	<?php echo $form->labelEx($model,'fechaNacimiento'); ?>                    
<?php
$this->widget('zii.widgets.jui.CJuiDatePicker',array(
    'name'=>'fechaNacimiento',    
    'value'=>date('Y-m-d'),
    'options'=>array(        
        'showButtonPanel'=>true,
        'dateFormat'=>'yy-mm-dd',//Date format 'mm/dd/yy','yy-mm-dd','d M, y','d MM, y','DD, d MM, yy'
    ),
    'htmlOptions'=>array(
        'style'=>''
    ),
));
?>
	<?php echo $form->error($model,'fechaNacimiento'); ?>  

              
	</div>
        
        
        
        

	<div class="row">
<?php echo $form->labelEx($model,'fechaBautismo'); ?>                    
<?php
$this->widget('zii.widgets.jui.CJuiDatePicker',array(
    'name'=>'fechaBautismo',    
    'value'=>date('Y-m-d'),
    'options'=>array(        
        'showButtonPanel'=>true,
        'dateFormat'=>'yy-mm-dd',//Date format 'mm/dd/yy','yy-mm-dd','d M, y','d MM, y','DD, d MM, yy'
    ),
    'htmlOptions'=>array(
        'style'=>''
    ),
));
?>
	<?php echo $form->error($model,'fechaBautismo'); ?>  

              
	</div>
        
        
        
        
        

	<div class="row">
		<?php echo $form->labelEx($model,'telefonoCasa'); ?>
		<?php echo $form->textField($model,'telefonoCasa',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'telefonoCasa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefonoPrivado'); ?>
		<?php echo $form->textField($model,'telefonoPrivado',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'telefonoPrivado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'direccion'); ?>
		<?php echo $form->textArea($model,'direccion',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'direccion'); ?>
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



        <div class="row"> 
             <?php //echo $form->labelEx($model,'País de Nacimiento'); ?>
       <?php
             $cargos1 = new CDbCriteria;
             $cargos1->order = 'descripcion ASC';
       ?>
       <?php
             echo $form->dropDownList($model,'cargo1',CHtml::listData(Cargos::model()->findAll($cargos1),'keyCargos','descripcion'),
                       array(
                           'ajax' => array(
                           'type' => 'POST',
                           'url' => CController::createUrl('CombosDependientes/dynamicMunicipios'),
                           'update' => '#CombosDependientes_codMunicipio'
                       ),'prompt' => 'Cargo/Puesto de iglesia...'
                 )
             );
       ?>
       <?php //echo $form->error($model,'codDepartamento'); ?>     
        </div>        
        
        
        <div class="row"> 
             <?php //echo $form->labelEx($model,'País de Nacimiento'); ?>
       <?php
             $cargos2 = new CDbCriteria;
             $cargos2->order = 'descripcion ASC';
       ?>
       <?php
             echo $form->dropDownList($model,'cargo2',CHtml::listData(Cargos::model()->findAll($cargos2),'keyCargos','descripcion'),
                       array(
                           'ajax' => array(
                           'type' => 'POST',
                           'url' => CController::createUrl('CombosDependientes/dynamicMunicipios'),
                           'update' => '#CombosDependientes_codMunicipio'
                       ),'prompt' => 'Cargo/Puesto de iglesia...'
                 )
             );
       ?>
       <?php //echo $form->error($model,'codDepartamento'); ?>     
        </div> 
        
        
        <div class="row"> 
             <?php //echo $form->labelEx($model,'País de Nacimiento'); ?>
       <?php
             $cargos3 = new CDbCriteria;
             $cargos3->order = 'descripcion ASC';
       ?>
       <?php
             echo $form->dropDownList($model,'cargo3',CHtml::listData(Cargos::model()->findAll($cargos3),'keyCargos','descripcion'),
                       array(
                           'ajax' => array(
                           'type' => 'POST',
                           'url' => CController::createUrl('CombosDependientes/dynamicMunicipios'),
                           'update' => '#CombosDependientes_codMunicipio'
                       ),'prompt' => 'Cargo/Puesto de iglesia...'
                 )
             );
       ?>
       <?php //echo $form->error($model,'codDepartamento'); ?>     
        </div>         
        

        
        
        <div class="row"> 
             <?php //echo $form->labelEx($model,'País de Nacimiento'); ?>
       <?php
             $club1 = new CDbCriteria;
             $club1->order = 'descripcion ASC';
       ?>
       <?php
             echo $form->dropDownList($model,'club1',CHtml::listData(Clubes::model()->findAll($club1),'keyC','descripcion'),
                       array(
                           'ajax' => array(
                           'type' => 'POST',
                           'url' => CController::createUrl('CombosDependientes/dynamicMunicipios'),
                           'update' => '#CombosDependientes_codMunicipio'
                       ),'prompt' => 'Clubes de iglesia...'
                 )
             );
       ?>
       <?php //echo $form->error($model,'codDepartamento'); ?>     
        </div>         
 
        <div class="row"> 
             <?php //echo $form->labelEx($model,'País de Nacimiento'); ?>
       <?php
             $club2 = new CDbCriteria;
             $club2->order = 'descripcion ASC';
       ?>
       <?php
             echo $form->dropDownList($model,'club2',CHtml::listData(Clubes::model()->findAll($club2),'keyC','descripcion'),
                       array(
                           'ajax' => array(
                           'type' => 'POST',
                           'url' => CController::createUrl('CombosDependientes/dynamicMunicipios'),
                           'update' => '#CombosDependientes_codMunicipio'
                       ),'prompt' => 'Clubes de iglesia...'
                 )
             );
       ?>
       <?php //echo $form->error($model,'codDepartamento'); ?>     
        </div>             
        
         <div class="row"> 
             <?php //echo $form->labelEx($model,'País de Nacimiento'); ?>
       <?php
             $club3 = new CDbCriteria;
             $club3->order = 'descripcion ASC';
       ?>
       <?php
             echo $form->dropDownList($model,'club3',CHtml::listData(Clubes::model()->findAll($club3),'keyC','descripcion'),
                       array(
                           'ajax' => array(
                           'type' => 'POST',
                           'url' => CController::createUrl('CombosDependientes/dynamicMunicipios'),
                           'update' => '#CombosDependientes_codMunicipio'
                       ),'prompt' => 'Clubes de iglesia...'
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