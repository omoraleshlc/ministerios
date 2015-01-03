<?php
/* @var $this ClubesController */
/* @var $data Clubes */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('keyC')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->keyC), array('view', 'id'=>$data->keyC)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('iglesia')); ?>:</b>
	<?php echo CHtml::encode($data->iglesia); ?>
	<br />


</div>