<?php
/* @var $this CatPaisesController */
/* @var $data CatPaises */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('num')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->num), array('view', 'id'=>$data->num)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alpha2')); ?>:</b>
	<?php echo CHtml::encode($data->alpha2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alpha3')); ?>:</b>
	<?php echo CHtml::encode($data->alpha3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('latitude')); ?>:</b>
	<?php echo CHtml::encode($data->latitude); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('longitude')); ?>:</b>
	<?php echo CHtml::encode($data->longitude); ?>
	<br />


</div>