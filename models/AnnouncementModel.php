<?php 
 
class AnnouncementModel
{
    private $db;

    public function __construct($dbConnection)
    {
        $this->db = $dbConnection;
    }

    public function __destruct()
    {
        $this->db->close();
    }

    public function getAnnouncements()
    {
        $query = "SELECT * FROM announcements";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        $results = $stmt->get_result();

        return $results->fetch_all(MYSQLI_ASSOC);
    }

    public function addAnnouncement($title, $content, $author, $status)
    {
        $query = "INSERT INTO announcement (`title`, `content`, `author`, `status` ) VALUES (?, ?, ?, ?)";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("ssss", $title, $content, $author, $status);

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