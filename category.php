<?php
/**
 * Created by PhpStorm.
 * User: stormlin
 * Date: 2017/3/10
 * Time: 23:46
 */

/**
 * 网站分类连接部分，在任意页面使用require "category.php"
 * 即可调用默认分类页面样式
 */

    $result = mysqli_query($conn, "SELECT * FROM CATEGORY");

    while ($row = mysqli_fetch_row($result)) {
        echo '<a class="category" href="#">'.$row[1].'</a>';
    }

?>