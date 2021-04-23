<?php
    $userName = 'admin';
    $password = '123456';
    $host = 'localhost';
    $dataBase = 'student';

    $conn = mysqli_connect($host,$userName,$password,$dataBase);
    // 检测连接
    if ($conn->connect_error) {
        die("连接失败: " . $conn->connect_error);
    } 
    // echo "连接成功";