<?php
/* @var $this UmControlAlumnosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Main',
);

$this->menu=array(
	array('label'=>'Agregar', 'url'=>array('create')),
	array('label'=>'Administrar ', 'url'=>array('admin')),
);
?>

<h1>Reportes</h1>
<br><br>
    <?php 
// Creating an Yii Extension component 
$flashChart = Yii::createComponent('application.modules.yiiopenflashchart.EOFC2'); 

// Stacked Bars, multiple charts and dom id 
$flashChart->begin(); 
$flashChart->setTitle('Alumnos x País'); 


$data = Yii::app()->db->createCommand()
                ->select('pais')
                ->from('um_controlAlumnos')
                ->where('pais<>"" ')
                ->group('pais')
                
                ->queryAll();
//$topepais = UmControlAlumnos::model()->findall();
//very useful google chart
$listaPaises = Yii::app()->db->createCommand()
                ->select('pais,matricula')
                ->from('um_controlAlumnos')
                ->where('pais<>"" ')
                ->group('pais')                
                ->queryAll();


$connection=Yii::app()->db; 
$cPaises=null;
	$stack = array(array("", "Cantidad de Alumnos"));
        foreach($listaPaises as $arrrr){          
        $sSQL= "SELECT count(*) as cantidadPaises FROM um_controlAlumnos
        WHERE
        pais='".$arrrr['pais']."'
        ";


$command4=$connection->createCommand($sSQL);
$dataReader4=$command4->query();
$myrow=$dataReader4->read();
$cPaises=(int) $myrow['cantidadPaises'];
           array_push($stack, array($arrrr['pais'], intval($cPaises)));
	}
        $nacionalidades=$stack;
        
  
	$this->widget('application.extensions.Hzl.google.HzlVisualizationChart', array(
		'visualization' => 'BarChart',
		'data'=>$stack,
                'options' => array(
			'title' => 'Alumnos por País',
			'width' => 800,
			'height' => 1200,
	)));

        $this->widget('application.extensions.Hzl.google.HzlVisualizationChart', array('visualization' => 'Map',
            'packages'=>'map',//default is corechart
            //'loadVersion'=>1.1,//default is 1.  As for Calendar, you need change to 1.1
            'data' => $stack,
            'options' => array('title' => 'Lugar de Residencia',
                'width' => 800,
		'height' => 800,
                'showTip'=>true,
                )));
//$flashChart->renderData('bar_stack'); 

/*
$flashChart->render(300,300); 
$flashChart->setData(array(1),'{n}',false,'stuff','chart2'); 
$flashChart->renderData('line',array(),'stuff','chart2'); */
//$flashChart->render(400,400,'chart2','chartDomId'); 
//echo '<div id="chartDomId"></div>'; 
?>

<div class="row"> 
    <div class="span" >  
        <?php
//very useful google chart


$stack=null;
$tAlumno=null;

$tipoAlumno = Yii::app()->db->createCommand()
                ->select('Estadocivil')
                ->from('um_controlAlumnos')
                //->where('pais<>"" ')
                ->group('Estadocivil')                
                ->queryAll();


	$stack = array(array("", "Cantidad de Alumnos"));
        
        
        foreach($tipoAlumno as $tp){          
        $sSQL= "SELECT count(*) as tipoAlumno FROM um_controlAlumnos
        WHERE
        Estadocivil='".$tp['Estadocivil']."'
        ";


        $command4=$connection->createCommand($sSQL);
        $dataReader4=$command4->query();
        $myrow=$dataReader4->read();
        $tAlumno=(int) $myrow['tipoAlumno'];
        if(!$tp['Estadocivil']){
            $tp['Estadocivil']='N/A';
        }
        
        array_push($stack, array($tp['Estadocivil'], intval($tAlumno)));
	}



    $this->widget('application.extensions.Hzl.google.HzlVisualizationChart', array('visualization' => 'PieChart',
            'data' => $stack,
            
            'options' => array('Estadísticas' => 'Demografía',
                        'width' => 800,
			'height' => 800,)));
 
        ?>
 
    </div>
</div>



 <div class="row"> 
    <div class="span6" align="center" >  
        <?php
//very useful google chart
 /*
        $this->widget('application.extensions.Hzl.google.HzlVisualizationChart', array('visualization' => 'Map',
            'packages'=>'map',//default is corechart
            //'loadVersion'=>1.1,//default is 1.  As for Calendar, you need change to 1.1
            'data' => array(
       ['Country', 'Population'],
        ['China', 'China: 1,363,800,000'],
        ['India', 'India: 1,242,620,000'],
        ['US', 'US: 317,842,000'],
        ['Indonesia', 'Indonesia: 247,424,598'],
        ['Brazil', 'Brazil: 201,032,714'],
        ['Pakistan', 'Pakistan: 186,134,000'],
        ['Nigeria', 'Nigeria: 173,615,000'],
        ['Bangladesh', 'Bangladesh: 152,518,015'],
        ['Russia', 'Russia: 146,019,512'],
        ['Japan', 'Japan: 127,120,000']
            ),
            'options' => array('title' => 'My Daily Activity',
                'showTip'=>true,
                )));*/
        
        
        

        ?>
 
    </div>
</div>




<?php 
/*
$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>



