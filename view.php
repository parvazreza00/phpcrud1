<?php
include('database.php');
// $sql = "SELECT * FROM users";


//delete query
if(isset($_GET['deleteid'])){
    $deleteid = $_GET['deleteid'];

    $sql = "DELETE FROM users WHERE id=$deleteid";
    $query = mysqli_query($conn, $sql);
    if($query==true){
        header('location:view.php');
    }

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-CRUD</title>
    <!-- jquery cdn -->
    <script src=
    "https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <h2 class="text-center">View Data</h2>
    <a href="index.php" class="btn btn-primary float-end">Add Data</a>
    
    <?php

        $sql = "SELECT * FROM users";
        $result = mysqli_query($conn, $sql);

        echo "<table class='table table-secondary'>
        <tr class><th>Name</th>
        <th>Email</th>
        <th>Phone Number</th>
        <th>City</th>
        <th>Action</th>
        </tr>";
        while($rows = mysqli_fetch_assoc($result)){

            $id = $rows['id'];
            $name = $rows['name'];
            $email = $rows['email'];
            $phone = $rows['phone'];
            $city = $rows['city'];

            echo "<tr><td>$name</td>
                      <td>$email</td>
                      <td>$phone</td>
                      <td>$city</td>
                      <td>
                      <span class='btn btn-success'><a href='edit.php?editid=$id' class='text-white text-decoration-none'>Edit</a></span>
                      <span class='btn btn-danger'><a href='view.php?deleteid=$id' class='text-white text-decoration-none'>Delete</a></span>
                      </td>
            </tr>";
        }

    ?>

        </tbody>
    </table>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- <script src="./js/ajax.js"></script> -->
</body>
</html>