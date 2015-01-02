<?php

class ArticleController extends Controller {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/column2';

    /**
     * @return array action filters
     */
    public function filters() {
        return array(
            'accessControl', // perform access control for CRUD operations
            'postOnly + delete', // we only allow deletion via POST request
        );
    }

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id) {

        if (!Yii::app()->user->checkAccess('viewArticle', array('aid' => $id))) {
            throw new CHttpException(403);
        }
        $this->render('view', array(
            'model' => $this->loadModel($id),
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {
        if (!Yii::app()->user->checkAccess('createArticle')) {
            throw new CHttpException(403);
        }
        $model = new Article;

        $this->performAjaxValidation($model);

        if (isset($_POST['Article'])) {
            $model->attributes = $_POST['Article'];
            $model->uid = Yii::app()->user->id;
            $model->created = $model->updated = time();
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->aid));
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) {
        if (!Yii::app()->user->checkAccess('updateArticle', array('aid' => $id))) {
            throw new CHttpException(403);
        }
        $model = $this->loadModel($id);

        $this->performAjaxValidation($model);

        if (isset($_POST['Article'])) {
            $model->attributes = $_POST['Article'];
            $model->updated = time();
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->aid));
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id) {
        if (!Yii::app()->user->checkAccess('deleteArticle', array('aid' => $id))) {
            throw new CHttpException(403);
        }
        $this->loadModel($id)->delete();

        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }

    /**
     * Lists all models.
     */
    public function actionIndex() {
        /*if (!Yii::app()->user->checkAccess('listArticles')) {
            throw new CHttpException(403);
        }
        $dataProvider = new CActiveDataProvider('Article',array(
            'criteria' => array(
                'order' => 'created DESC',
            ),
            'pagination' => array(
                'pageSize' => 2,
            ),
        ));
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
         * 
         */
        $this->render('index');
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        if (!Yii::app()->user->checkAccess('adminArticles')) {
            throw new CHttpException(403);
        }
        $model = new Article('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['Article'])){
            $model->attributes = $_GET['Article'];
        }

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return Article the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = Article::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404);
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param Article $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'article-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}
