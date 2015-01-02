<?php
/* @var $this UmControlAlumnosController */
/* @var $data UmControlAlumnos */
?>



<div class="view">
    

 

        <?php echo CHtml::image('images/i_imagen.jpeg', 'Nombre',array('width'=>50,'height'=>50)); ?>
        
    <b >
        <?php echo CHtml::encode($data->matricula); ?>
        
        </b>
    <a href="view&id=<?php echo $data->keyAlumnos;?>"></a>
	
    
    	
	<?php echo CHtml::encode($data->nombre1); ?>
	<?php echo CHtml::encode($data->apellidos1); ?>	
	<?php echo CHtml::encode($data->apellidos2); ?>
	
        
        
	<?php echo CHtml::link(CHtml::encode("Ver"), array('view', 'id'=>$data->keyAlumnos)); ?>
        
        
	<?php //echo CHtml::link(CHtml::encode($data->keyAlumnos), array('view', 'id'=>$data->keyAlumnos)); ?>
	










	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre2')); ?>:</b>
	<?php echo CHtml::encode($data->nombre2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Hermanos')); ?>:</b>
	<?php echo CHtml::encode($data->Hermanos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaNacimiento')); ?>:</b>
	<?php echo CHtml::encode($data->fechaNacimiento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lugarNacimiento')); ?>:</b>
	<?php echo CHtml::encode($data->lugarNacimiento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pais')); ?>:</b>
	<?php echo CHtml::encode($data->pais); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nacionalidad')); ?>:</b>
	<?php echo CHtml::encode($data->Nacionalidad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('region')); ?>:</b>
	<?php echo CHtml::encode($data->region); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Estadocivil')); ?>:</b>
	<?php echo CHtml::encode($data->Estadocivil); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Conyuge')); ?>:</b>
	<?php echo CHtml::encode($data->Conyuge); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ConyugeExaUM')); ?>:</b>
	<?php echo CHtml::encode($data->ConyugeExaUM); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NombreFacebook')); ?>:</b>
	<?php echo CHtml::encode($data->NombreFacebook); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('URLFacebook')); ?>:</b>
	<?php echo CHtml::encode($data->URLFacebook); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Puesto')); ?>:</b>
	<?php echo CHtml::encode($data->Puesto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('viveEn')); ?>:</b>
	<?php echo CHtml::encode($data->viveEn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Ciudad')); ?>:</b>
	<?php echo CHtml::encode($data->Ciudad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Postgrado')); ?>:</b>
	<?php echo CHtml::encode($data->Postgrado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Especialidad')); ?>:</b>
	<?php echo CHtml::encode($data->Especialidad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Subespecialidad')); ?>:</b>
	<?php echo CHtml::encode($data->Subespecialidad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Maestria')); ?>:</b>
	<?php echo CHtml::encode($data->Maestria); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Residencia')); ?>:</b>
	<?php echo CHtml::encode($data->Residencia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Twitter')); ?>:</b>
	<?php echo CHtml::encode($data->Twitter); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email1')); ?>:</b>
	<?php echo CHtml::encode($data->email1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email2')); ?>:</b>
	<?php echo CHtml::encode($data->email2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telCasa')); ?>:</b>
	<?php echo CHtml::encode($data->telCasa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telTrabajo')); ?>:</b>
	<?php echo CHtml::encode($data->telTrabajo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telCelular')); ?>:</b>
	<?php echo CHtml::encode($data->telCelular); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ciudadResidencia')); ?>:</b>
	<?php echo CHtml::encode($data->ciudadResidencia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('direccion')); ?>:</b>
	<?php echo CHtml::encode($data->direccion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Trabajo')); ?>:</b>
	<?php echo CHtml::encode($data->Trabajo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Trabajo2')); ?>:</b>
	<?php echo CHtml::encode($data->Trabajo2); ?>
	<br />

	*/ ?>

</div>