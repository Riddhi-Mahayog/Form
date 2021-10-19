<?php
    $firstname = filter_input(INPUT_POST, 'firstname');
    $lastname =  filter_input(INPUT_POST, 'lastname');
    if(!empty($firstname)){
    if(!empty($lastname)){
    
        $host ="localhost";
        $dbusername = "root";
        $dbpassword = "";
        $dbname = "form";
        
        //create connection
        $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

        if(mysqli_connect_error()){
            die('connect error('.mysqli_connect_error().')'.mysqli_connect_error());
        }
        else{
            $sql = "INSERT INTO newform (firstname, lastname)
            values('$firstname' ,'$lastname')";
            if($conn->query($sql)){
                echo "New record is inserted succesfully";
            }
            else{
                echo "Error:".$sql."<br>".$conn->error;
            }
            $conn->close();
        }
    }
    else{
        echo "lastname should not be empty";
        die();
    }
    }
    else{
        echo "firstname should not be empty";
        die();
    }