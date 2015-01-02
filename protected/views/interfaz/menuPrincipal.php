<?php 
$ip=NULL;
/*
$siteSima=substr($_SERVER['REMOTE_ADDR'],0,3);
$siteFinanciero=substr($_SERVER['REMOTE_ADDR'],0,3);

switch ($siteSima) {
    case "10.":
        $ip="10.2.1.201";

        break;

    

    default:
        $ip="www.sshlc.org"; 
        break;
}


switch ($siteFinanciero) {
    case "10.":
        $ipF="10.2.1.8:8080";

        break;

    default:
        $ipF="www.sshlc.org"; 
        break;
    
    
}

switch ($siteFitnes) {
    case "10.":
        $ipF="www.sshlc.org/gm";

        break;


        default:
        $ipF="www.sshlc.org"; 
        break;
    
}

$siteSima=$ip;
$siteFinanciero=$ipF;

//disable=style="opacity:0.4;filter:alpha(opacity=40);"




<div id="navbar-example" class="navbar navbar-static">
              <div class="navbar-inner">
                <div class="container" style="width: auto;">
                  <a class="brand" href="#">Modulos</a>
                  
                  
                  
                  <ul class="nav">
                    <li id="fat-menu" class="dropdown">
                      <a href="#" id="drop3" role="button" class="dropdown-toggle" data-toggle="dropdown">REPORTES <b class="caret"></b></a>
                      <ul class="dropdown-menu" role="menu" aria-labelledby="drop3">
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Mis Permisos</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Mi Cuenta</a></li>
                    
                        <li role="presentation" class="divider"></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Salir</a></li>
                      </ul>
                    </li>
                  </ul>
                  
                  <ul class="nav">
                    <li id="fat-menu" class="dropdown">
                      <a href="#" id="drop3" role="button" class="dropdown-toggle" data-toggle="dropdown">TRANSACCIONES <b class="caret"></b></a>
                      <ul class="dropdown-menu" role="menu" aria-labelledby="drop3">
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Mis Permisos</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Mi Cuenta</a></li>
                    
                        <li role="presentation" class="divider"></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Salir</a></li>
                      </ul>
                    </li>
                  </ul>
                  
                  
                  
                  
                  
                  
                  
                </div>
              </div>
            </div> */

?>

  
    <?php
    /*
    echo CHtml::textField('Text', '',
 array('id'=>'test', 
                'name'=>'test',
        'width'=>100, 
        'maxlength'=>100)); */
    $divid=1;
$entidad=Usuarios::model()->findByAttributes(array('usuario'=>Yii::app()->user->name));
$entidad=$entidad->entidad;
?>
    
    

        


<script>
function cambiarBorde(id)
{
document.getElementById(id).style.border="1px #42C0FB solid";
document.getElementById(id).style.background ='';
}
</script>

<script>
function normal(id)
{
document.getElementById(id).style.border="";
document.getElementById(id).style.background ="";
}
</script>

        





<?php 
/*
$watermark_options  = array(
                        'watermark'     => './images/logoCarlota.jpg',
                        'halign'        => Watermarker::ALIGN_RIGHT,
                        'valign'        => Watermarker::ALIGN_BOTTOM,
                        'hshift'        => -10,
                        'vshift'        => -10,
                        'type'          => IMAGETYPE_JPEG,          // Save result in JPEG to minimize file size
                        'jpeg-quality'  => 90,
                );
                // Save watermarked image to file
                Watermarker::output($finalImageName, $finalImageName, $watermark_options);
 * 
 */


/*
 Catalogo de modulos generales: <a href="index.php?r=usersModulosGenerales">
 */
?>







<div class="barra_separadora">
     
     <span ><small>Módulos Generales</small></span>
     
</div>


   
<br>
















         
          <div class="row-fluid" >
            <ul class="thumbnails">
              
                
                
                <a href="index.php?r=umControlAlumnos">  
              <li class="span2">
                  
                <div id="1" class="thumbnail" onmouseover="javascript:cambiarBorde('1');" onmouseout="normal('1');">
                  <img height="50" src="./images/i_miembros.jpeg" width="68" data-src="holder.js/64x64" alt="">
                  <div class="caption" align="center">
                    <small>Miembros de Iglesia</small>                
                    
                  </div>
                </div>
                  
              </li>
                </a>
                
                
                <li></li>
                
                <a href="index.php?r=reports">  
              <li class="span2">
                  
                <div id="2" class="thumbnail" onmouseover="javascript:cambiarBorde('2');" onmouseout="normal('2');">
                  <img height="50" src="./images/i_estadisticas.jpeg" width="68" data-src="holder.js/64x64" alt="">
                  <div class="caption" align="center">
                    <small>Informes</small>                
                    
                  </div>
                </div>
                  
              </li>
                </a>
                
                
                
                <li></li>
                
                <a href="index.php?r=reports">  
              <li class="span2">
                  
                <div id="3" class="thumbnail" onmouseover="javascript:cambiarBorde('3');" onmouseout="normal('3');">
                  <img height="50" src="./images/i_iglesias.png" width="68" data-src="holder.js/64x64" alt="">
                  <div class="caption" align="center">
                    <small>Iglesias</small>                
                    
                  </div>
                </div>
                  
              </li>
                </a>
                
               
            </ul>
          </div>
          
          

          




       