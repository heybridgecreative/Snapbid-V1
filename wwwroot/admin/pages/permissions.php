$user = $_SESSION['aduser'];
$username = $_SESSION['adusername'];
$firstname = $_SESSION['adfirstname'];
$surname = $_SESSION['adsurname'];
$email = $_SESSION['ademail'];

$permissionCheck = mysql_query("SELECT * FROM snapbid_users JOIN snapbid_user_types ON snapbid_users.type = snapbid_user_types.type_id");

