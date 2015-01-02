<?php


##TODAS LAS VISTAS LAS DEBES PROTEGER
class AdministracionController extends Controller
{       ##VERIFICAR EL MODELO DE ROLES
    
    
	public function actionIndex()
	{
            if (Yii::app()->user->checkAccess("ADMINISTRADOR"))
            {   //si tienes permisos
                $this->render('index'); 
            } else { //no tienes permisos
              $this->redirect(array('site'));
            }
    
    
//	    if(Yii::app()->user->name!=null and Yii::app()->user->name!='Guest'){
//            $this->render('index'); 
//            }else{
//            $this->redirect(array('/site')); 
//            }
            
	}
        
        
        

	public function actionAjustarCuentas(){
 
            if(Yii::app()->user->name!=null and Yii::app()->user->name!='Guest'){
            $this->render('ajustarCuentas'); 
            }else{
            $this->redirect(array('/site')); 
            }
            
        }
        
            public function actionivaxPagar(){
            if(Yii::app()->user->name!=null and Yii::app()->user->name!='Guest'){
            $search=$_POST['search'];    
            //if(!$_POST['fechaInicial']){echo 'paso';}
            $this->render('ivaxPagar'); 
            //return TRUE;
            }else{
            $this->redirect(array('/site')); 
            }
            
        }

        
        
//        public function accessRules()
//{
//         return array(
//                 array('allow',  
//                         'actions'=>array('admin','update'),
//                         'roles'=>array('rol_edicion'),
//                         'expression'=>'$user->id == '.$this->idPropio 
//        // Esta es la idea, entonces debe ajustarse a su propia configuración
//                  ),);
        
        
        
         public function accessRules()
    {
        return array(
            array('allow',
                'actions'=>array('index'),
                'users'=>array('?'),
            ),
            array('allow',
                'actions'=>array('view'),
                'users'=>array('@'),
            ),
            array('allow',
                'actions'=>array('create','update','admin','delete'),
 
                'expression'=>'Yii::app()->user->checkAccess("adminFinanciero")',
                // or
                // 'roles'=>array('adminFinanciero'),
 
            ),
            array('deny',
                'users'=>array('*'),
            ),
        );
    }
         
}
       


