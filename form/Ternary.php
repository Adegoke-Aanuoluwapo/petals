<?php
$is_user_logged_in = false;
// if ($is_user_logged_in) {
//  $title = 'Logout';
// } else {
//  $title = 'Login';
// }
$title = $is_user_logged_in ? 'Logout': 'Login';
?>


<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>

<body>
 <?php echo $title ?>
</body>

</html>