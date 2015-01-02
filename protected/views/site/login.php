<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);

?>












    <div align="center" class="nav-header">
 <?php echo CHtml::image('images/7day.jpeg', 'Iglesia Adventista del Séptimo Día',array('width'=>250,'height'=>250)); ?>
        </div>


<div class="container" align="center">
<h4>Favor de identificarse</h4>  




<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	), 'htmlOptions'=>array(
        'class'=>'form-control',
    ),

)
        ); ?>

	
    
        
      

  
    
    <div class="controls">
    <?php //echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username'); ?>
		<?php echo $form->error($model,'username'); ?>
    </div>
   
 
    
    <div class="controls">
    <?php //echo $form->labelex($model,'password'); ?>
		<?php echo $form->passwordField($model,'password'); ?>
		<?php echo $form->error($model,'password'); ?>
    </div>

<div class="warning">
    
    <?php echo CHtml::submitButton('LOGIN',array('class'=>'form-control')); ?>
    </div>






<?php $this->endWidget(); ?>
    
    
    
</div><!-- form -->
