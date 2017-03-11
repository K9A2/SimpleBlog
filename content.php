<?php
/**
 * Created by PhpStorm.
 * User: K9A2S
 * Date: 2017/3/11
 * Time: 9:21
 *
 * 网站POST页面，接受GET请求，并从中提取出POST_ID。QUERY DB后，显示页面。
 * $row[0] = post_id
 * $row[1] = post_category
 * $row[2] = post_title
 * $row[3] = post_text
 * $row[4] = post_date
 *
 */

    //导入数据库连接文件
    require "php/config.php";

    //获取post_id
    $ID = $_GET["post_id"];

    //打开数据库连接并获取数据
    $conn = mysqli_connect(ADDRESS, USER, PASSWORD, DB_NAME);
    mysqli_set_charset($conn, "utf8");
    $result = mysqli_query($conn, "SELECT * FROM POST WHERE POST_ID = ".$ID);

?>

<!--下面是html文件本身-->
<!DOCTYPE html>
<html>
    <head>
        <?php require "header.php"; ?>
    </head>
    <body>
        <!--网站banner部分-->
        <?php require "banner.php"; ?>
        <!--网站正文部分-->
        <div class="container">
            <?php  ?>
        </div>
        <!--网站页脚部分-->
        <?php require "footer.php"; ?>
    </body>
</html>
