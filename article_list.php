<?php
/**
 * Created by PhpStorm.
 * User: K9A2S
 * Date: 2017/3/11
 * Time: 11:18
 *
 * 文章列表文件
 *
 * @name article_list.php
 * @path ./article_list.php
 * @require
 *
 */

    $result = mysqli_query($conn, "SELECT * FROM POST");

    //.为php中的字符串连接符
    //当用''来表示一个字符串时，不需要使用/来对"进行转义
    while ($row = mysqli_fetch_row($result)) {
        echo '<ul class="title_and_date">';
        echo '<a href="/stormlin/post.php?post_id='.$row[0].'">'.$row[2].'</a>';
        echo '<span class="release_time">'.$row[4].'</span>';
        echo '</ul>';
    }
?>

