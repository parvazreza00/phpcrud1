<?php
    include('database.php');
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $city = mysqli_real_escape_string($conn, $_POST['city']);

    if(mysqli_query($conn, "INSERT INTO users(name, email, phone, city) 
        VALUES('".$name."','".$email."','".$phone."','".$city."')")){
            echo '1';
        }else{
            echo "Error: ".mysqli_error($conn);
        }
    mysqli_close($conn);
    


?>