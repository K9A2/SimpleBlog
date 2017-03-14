<?php
/**
 * Created by PhpStorm.
 * User: K9A2S
 * Date: 2017/3/13
 * Time: 15:02
 *
 * 分类列表页面
 *
 */

    require "php/config.php";
    require "php/query.php";

    //获取分类名称
    $CATEGORY_NAME = $_GET["category_name"];

    //打开数据库连接
    $conn = getConnection();

?>

<!DOCTYPE html>
<html>
    <head>
        <?php require "head.php"; ?>
    </head>
    <body>
        <?php
            require "banner.php";
            $conn = getConnection();
        ?>
        <div class="container">
            <div class="category">
                <?php require "category_list.php"; ?>
            </div>
            <div class="article_list">
                <?php
                    printTitleListByCategoryName($conn, $CATEGORY_NAME);
                    freeConnection($result, $conn);
                ?>
            </div>
        </div>
        <?php require "footer.php"; ?>
    </body>
</html>
