<?php 
 
class AnnouncementModel
{
    private $db;

    public function __construct($dbConnection)
    {
        $this->db = $dbConnection;
    }

    public function getAnnouncements()
    {
        $query = "SELECT * FROM announcement order by created_at desc";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        $results = $stmt->get_result();

        return $results->fetch_all(MYSQLI_ASSOC);
    }

    public function addAnnouncement($title, $content, $author, $status, $date)
    {
        $query = "INSERT INTO announcement (`title`, `content`, `author`, `status`, `created_at`  ) VALUES (?, ?, ?, ?, ?)";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("sssss", $title, $content, $author, $status, $date);

        return $stmt->execute();
    }
    public function deleteAnnouncement($id){
        $query = "DELETE FROM announcement WHERE id =?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }
}

// Example usage:
// $announcementModel = new AnnouncementModel($dbconn);

// Fetch all announcements
// $announcements = $announcementModel->getAnnouncements();
// foreach ($announcements as $announcement) {
//     echo "Title: " . $announcement['title'] . "\n";
//     echo "Body: " . $announcement['body'] . "\n";
// }

// Add a new announcement
// $success = $announcementModel->addAnnouncement("New Class Schedule", "The new class schedule has been posted.", "lorean", 'active');
// if ($success) {
//     echo "Announcement added successfully.";
// } else {
//     echo "Error adding announcement.";
// }
?>