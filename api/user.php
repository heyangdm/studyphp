<?php
    require_once '../mysqlConction/conction.php';
    $action = $_GET['action'];

    switch ($action ) {
        case 'register':
            print_r($_POST);
            $account = $_POST['account'];
            $password = $_POST['password'];
            $user_name = $_POST['user_name'];
            $age = $_POST['age'];
            $sex = $_POST['sex'];

            $type;
            // select * from runoob_tbl;
            $result = mysqli_query($conn,"SELECT * FROM user_form
            WHERE nick_name IN");
            // $row = mysqli_fetch_array($result);
            if($result == '' ||$result == null){
                $userid = rand(10000,99999);
                $sql = "INSERT INTO user_form (userid,user_name,age,sex,account,password) VALUES ('$userid','$user_name','$age','$sex','$account','$password')";
                if ($conn->query($sql) === TRUE) {
                    echo "注册成功";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }

            
            break;
        
        case 'login':
            $account = $_POST['account'];
            $password = $_POST['password'];

            print_r($password);

        
        default:
            # code...
            break;
    }


?>