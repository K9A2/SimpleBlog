<?php
/**
 * Created by PhpStorm.
 * User: stormlin
 * Date: 2017/3/10
 * Time: 23:46
 */

/**
 * 网站的分类连接部分，在任意页面使用require "category_list.php"
 * 即可调用默认分类页面样式
 */

    $result = mysqli_query($conn, "SELECT * FROM CATEGORY");

    while ($row = mysqli_fetch_row($result)) {
        echo '<a class="category" href="/stormlin/category.php?category_name='.$row[2].'">'.$row[1].'</a>';
    }

    function printTitleListByCategoryName($conn, $category_name){

        $result = mysqli_query($conn, "SELECT * FROM POST WHERE CATEGORY = /".$category_name."/");

        while($row = mysqli_fetch_row($result)){
            echo '<ul class="title_and_date">';
            echo '<a href="/stormlin/post.php?post_id='.$row[0].'">'.$row[2].'</a>';
            echo '</ul>';
        }

    }

?>