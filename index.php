<?php

/**
 * Author: stormlin
 * Date:   2017/3/8
 * Time:   20:21
 *
 * 网站首页文件
 *
 */
    //前置引用
    require "php/config.php";
    require "php/query.php";

?>

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
            <!--category为网站的文章分类-->
            <div class="category">
                <?php

                $conn = mysqli_connect(ADDRESS, USER, PASSWORD, DB_NAME);

                //解决MYSQL乱码问题
                mysqli_set_charset($conn, "utf8");

                $result = mysqli_query($conn, "SELECT * FROM CATEGORY");

                while ($row = mysqli_fetch_row($result)) {
                    echo '<a class="category" href="#">'.$row[1].'</a>';
                }

                ?>
            </div>
            <!--atricle_list是网站的文章标题列表，用于首页-->
            <div class="article_list">
                <?php

                $result = mysqli_query($conn, "SELECT * FROM POST");

                //.为php中的字符串连接符
                //当用''来表示一个字符串时，不需要使用/来对"进行转义
                while ($row = mysqli_fetch_row($result)) {
                    echo '<ul class="category_title_and_date">';
                    echo '<a href="#">'.$row[2].'</a>';
                    echo '<span class="release_time">'.$row[4].'</span>';
                    echo '</ul>';
                }

                mysqli_free_result($result);
                mysqli_close($conn);

                ?>
                <ul class="category_title_and_date">
                    <a href="/stormlin/content.php?post_id=1" target="_blank">测试连接</a>
                    <span class="release_time">2016.1.1</span>
                </ul>
            </div>
        </div>
        <!--网站页脚部分-->
        <?php require "footer.php"; ?>
    </body>
</html>