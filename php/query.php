<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: stormlin
 * Date: 2017/3/8
 * Time: 20:21
 */
require "config.php";

$conn = mysqli_connect($address, $user, $password, "stormlin");
$result = mysqli_query($conn, "SELECT * FROM POST");

echo phpinfo();

while ($row = mysqli_fetch_row($result)) {
    for($i = 0; $i < mysqli_num_fields($result); $i++){
        echo "</br>";
        echo $row[$i];
    }
}

mysqli_free_result($result);
mysqli_close($conn);

?>
</body>
</html>
