<?php
/* @var $this IglesiasController */
/* @var $data Iglesias */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('keyIglesias')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->keyIglesias), array('view', 'id'=>$data->keyIglesias)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />


</div>