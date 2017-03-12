<?php

/**
 * Author: stormlin
 * Date:   2017/3/8
 * Time:   20:21
 *
 * 网站首页文件
 *
 * @name index.php
 * @path ./index.php
 * @require php/config.php, php/query.php, head.php, footer.php, banner.php
 *
 */
    //前置引用
    require "php/config.php";
    require "php/query.php";

?>

<!DOCTYPE html>
<html>
    <head>
        <?php require "head.php"; ?>
    </head>
    <body>
        <!--网站banner部分-->
        <?php require "banner.php"; ?>
        <!--网站正文部分-->
        <div class="container">
            <!--获取数据库连接-->
            <?php $conn = getConnection(); ?>
            <!--category为网站的文章分类-->
            <div class="category">
                <?php require "category.php"; ?>
            </div>
            <!--atricle_list是网站的文章标题列表，用于首页-->
            <div class="article_list">
                <?php require "article_list.php"?>
                <!--释放数据库连接以及查询结果-->
                <?php freeConnection($result, $conn); ?>
                <!--以下为GET请求测试连接-->
                <ul class="category_title_and_date">
                    <a href="/stormlin/post.php?post_id=1" target="_blank">测试连接</a>
                    <span class="release_time">2016.1.1</span>
                </ul>
            </div>
        </div>
        <!--网站页脚部分-->
        <?php require "footer.php"; ?>
    </body>
</html>