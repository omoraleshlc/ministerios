<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SubeImagenController
 *
 * @author oamg
 */
class SubeImagenController {
    //put your code here
    public function actionUploadPost() {
        $model = new ForumPost;
    $gallery = new UserGallery;
    if(isset($_POST['ForumPost'], $_FILES['UserGallery'])) {
        // populate input data to $model and $gallery
        $model->attributes=$_POST['ForumPost'];
        $gallery->attributes=$_POST['UserGallery'];
        $rnd = rand(0123456789, 9876543210);    // generate random number between 0123456789-9876543210
    $timeStamp = time();    // generate current timestamp
        $uploadedFile = CUploadedFile::getInstance($gallery, 'forum_image');
        if ($uploadedFile != null) {
        $fileName = "{$rnd}-{$timeStamp}-{$uploadedFile}";  // random number + Timestamp + file name
        $gallery -> forum_image = $fileName;
    }
        $valid_format = "jpg,png,jpeg,gif";     // Allow the above extensions only.
    if ($gallery -> save() && $valid_format) {
        if (!empty($uploadedFile)) {
            $uploadedFile -> saveAs(Yii::app() -> basePath . '/../images/post/' . $fileName); // save images in given destination folder
                }
        }
        $model -> save(FALSE);
}
}
}