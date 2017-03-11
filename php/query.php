<?php
/**
 * Created by PhpStorm.
 * User: stormlin
 * Date: 2017/3/8
 * Time: 20:21
 *
 * 此文件用于获取数据库连接以及销毁数据库连接和查询结果。
 * 在require此文件之前，请务必确认执行了require "php/config.php"。
 *
 * @name query.php
 * @path php/query.php
 * @require php/config.php
 *
 */
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
<?php

/**
 * 根据php/config.php中的数据库连接信息获取数据库连接
 * @return mysqli mysql_connection类型返回值。在使用前需要执行require "config.php"。
 */
function getConnection(){

    try{
        $conn = mysqli_connect(ADDRESS, USER, PASSWORD, DB_NAME);
    } catch (Exception $exception){
        echo $exception->getMessage();
    }

    mysqli_set_charset($conn, "utf8");
    return $conn;

}

/**
 * 销毁查询结果和数据库连接
 * @param $result 查询结果
 * @param $conn 数据库连接
 */
function freeConnection($result, $conn){

    mysqli_free_result($result);
    mysqli_close($conn);

}

?>
</body>
</html>
