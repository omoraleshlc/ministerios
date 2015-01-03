<?php
/* @var $this GruposController */
/* @var $data Grupos */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('keyGrupos')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->keyGrupos), array('view', 'id'=>$data->keyGrupos)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombreLider')); ?>:</b>
	<?php echo CHtml::encode($data->nombreLider); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($data->fecha); ?>
	<br />


</div>