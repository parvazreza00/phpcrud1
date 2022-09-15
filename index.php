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
   
    
    <div class="container my-5">
        <div style="margin:auto; width:60%">
            <div class="alert alert-success alert-dismissible" id="success" style="display:none;">
	            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
	        </div>
            <form id="fupForm" name="form1" action="post">
                <div class="form-floating mt-2">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
                    <label for="name" class="form-label">Name</label>
                </div>
                <div class="form-floating mt-2">
                    
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your Email">
                    <label for="email" class="form-label">Email</label>
                </div>
                <div class="form-floating mt-2">
                    
                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter your Phone Number">
                    <label for="phone" class="form-label">Phone Number</label>
                </div>
                <div class="form-floating mt-2">
                    
                    <select name="city" id="city" class="form-control">
                        <option value="">Select City</option>
                        <option value="Dhake">Dhaka</option>
                        <option value="Dhake">Chattagram</option>
                        <option value="Dhake">Rajshahi</option>
                        <option value="Dhake">Barisal</option>
                        <option value="Dhake">Rangpur</option>
                        <option value="Dhake">Mymanshing</option>
                        <option value="Dhake">Sylhet</option>
                        <option value="Dhake">Kulna</option>
                    </select>
                    <label for="city" class="form-label">City Name</label>
                </div>
                <input id="submit" type="button" class="btn-submit btn btn-primary" value="Submit" />
            </form>
        </div>
    </div>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script src="./js/ajax.js"></script>
</body>
</html>