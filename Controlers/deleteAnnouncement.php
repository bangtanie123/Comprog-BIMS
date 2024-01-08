<?php 
require_once '../config.php';
require_once '../models/AnnouncementModel.php';

$announcementModel = new AnnouncementModel($dbconn);

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $announcementModel->deleteAnnouncement($id);
   
    header("Hx-refresh: true");
    exit;
}



?>