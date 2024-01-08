<?php

require_once '../config.php';
require_once '../models/AnnouncementModel.php';
if (isset($_POST['submit'])) {

    $title = $_POST['title'];
    $status = $_POST['status'];
    $content = $_POST['content'];
    $author = 'bot';
    $currentDate = date('Y-m-d H:i:s');
 
    $announcementModel = new AnnouncementModel($dbconn);
    $announcementModel->addAnnouncement($title, $content, $author, $status, $currentDate);
    if ($announcementModel){
    //  $_SESSION['status'] = 'success';
        header("Location:../announcement.php");
        exit;
    }

}


?>