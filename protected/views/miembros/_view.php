<?php
/* @var $this MiembrosController */
/* @var $data Miembros */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('KeyM')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->KeyM), array('view', 'id'=>$data->KeyM)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('grupo')); ?>:</b>
	<?php echo CHtml::encode($data->grupo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaNacimiento')); ?>:</b>
	<?php echo CHtml::encode($data->fechaNacimiento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaBautismo')); ?>:</b>
	<?php echo CHtml::encode($data->fechaBautismo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefonoCasa')); ?>:</b>
	<?php echo CHtml::encode($data->telefonoCasa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefonoPrivado')); ?>:</b>
	<?php echo CHtml::encode($data->telefonoPrivado); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('direccion')); ?>:</b>
	<?php echo CHtml::encode($data->direccion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('iglesia')); ?>:</b>
	<?php echo CHtml::encode($data->iglesia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cargo1')); ?>:</b>
	<?php echo CHtml::encode($data->cargo1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cargo2')); ?>:</b>
	<?php echo CHtml::encode($data->cargo2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cargo3')); ?>:</b>
	<?php echo CHtml::encode($data->cargo3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('club1')); ?>:</b>
	<?php echo CHtml::encode($data->club1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('club2')); ?>:</b>
	<?php echo CHtml::encode($data->club2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('club3')); ?>:</b>
	<?php echo CHtml::encode($data->club3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($data->fecha); ?>
	<br />

	*/ ?>

</div>