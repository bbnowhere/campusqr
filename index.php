<?php
namespace Alokb;

if (! empty($_POST["login-btn"])) {
    require_once __DIR__ . '/lib/User.php';
    $user = new User();
    $loginResult = $user->loginMember();
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css"
	crossorigin="anonymous">
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<link href="vendor/fontawesome/css/all.css"
	rel="stylesheet">
<link href="assets/css/style.css"
	rel="stylesheet">
</head>
<body>
<?php

require_once __DIR__ . '/template/login.php';

?>
</body>
</html>
