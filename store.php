<?php
    include('database.php');
    // $name = mysqli_real_escape_string($conn, $_POST['name']);
    // $email = mysqli_real_escape_string($conn, $_POST['email']);
    // $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    // $city = mysqli_real_escape_string($conn, $_POST['city']);

    // if(mysqli_query($conn, "INSERT INTO users(name, email, phone, city) 
    //     VALUES('".$name."','".$email."','".$phone."','".$city."')")){
    //         echo '1';
    //     }else{
    //         echo "Error: ".mysqli_error($conn);
    //     }
    // mysqli_close($conn);


    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $city = $_POST['city'];

    $sql = "INSERT INTO `users`(`name`, `email`, `phone`, `city`) VALUES ('$name','$email','$phone','$city')";

    if(mysqli_query($conn, $sql)){
        echo json_encode(array('statusCode'=>200));
    }else{
        echo json_encode(array('statuCode'=>201));
    }
    mysqli_close($conn);


?>