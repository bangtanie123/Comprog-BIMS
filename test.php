<?php 
require_once __DIR__ . '/vendor/autoload.php'; // change path as needed
session_start();
$fb = new \Facebook\Facebook([
  'app_id' => '1127164128694028',
  'app_secret' => 'd04a641a714d6a707780e73dbdebc42a',
  'default_graph_version' => 'v18.0',
  'persistent_data_handler'=>'session'
]);

$helper = $fb->getRedirectLoginHelper();


$permissions = ['email']; // optional
$loginUrl = $helper->getLoginUrl('http://localhost:5000/login.php', $permissions);
// $fb->getRedirectLoginHelper()->setRedirectUrl('index.php');





?>


<a href="<?php echo $loginUrl;?>">
  login with facebook
</a>