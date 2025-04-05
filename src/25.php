<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "school_project";

    // 创建连接
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // 检查连接
    if ($conn->connect_error) {
        die("连接失败: " . $conn->connect_error);
    }

    echo "数据库连接成功";
    
    // 假设这里有一个包含学生信息的SQL查询语句
    $sql = "SELECT * FROM students WHERE id = 12345"; 
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "获取到数据: " . $result->fetch_assoc()[0];
    } else {
        echo "没有找到学生信息";
    }

    // 关闭连接
    $conn->close();
?>
