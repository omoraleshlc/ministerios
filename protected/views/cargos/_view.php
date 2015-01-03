<?php
/* @var $this CargosController */
/* @var $data Cargos */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('keyCargos')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->keyCargos), array('view', 'id'=>$data->keyCargos)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />


</div>