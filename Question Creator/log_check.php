<?php
    
    include("login.php");
    session_start();
    
    if(isset($_POST['submit'])){

        $username = $_POST['uname'];
        $password = $_POST['password'];
        
        if(empty($username) || empty($password) ){
            header('location: login.php?msg=All fields are required');
        }else{
            
            $sql = "select * from login where username='".$username."' and password='".$password."'";

                $connection = mysqli_connect('127.0.0.1:3306', 'root', '', 'login');

            $result = mysqli_query($connection, $sql);
            $row = mysqli_fetch_assoc($result);


            if(count($row) > 0){

                $name = $row['Name'];
                $email = $row['Email'];
                $time = date("h:i:sa");


                setcookie('STATUS', 'OK', time()+3600, '/');
                setcookie('uname', $username, time()+3600, '/');
                //setcookie('password', $password, time()+3600, '/');

                // storing name and emails from database to cookie
                setcookie('name', $name, time()+3600, '/');
                setcookie('email', $email, time()+3600, '/');

                // storing login log inside text file
                $file = fopen('SuperAdminUserLog.txt', 'a');
                $QuestionMaker = $username."|".$password."|".date("d/m/Y").",".$time."\n";
                fwrite($file, $QuestionMaker);
                fclose($file);

                echo "WELCOME";
                
                header('location: login.php');
            }else{
                header('location: login.php?msg=invalid username or password');
            }
        }   

    }else{
        echo " ";
        
    }




?>