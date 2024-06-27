<?php

session_start();

echo "Welcome  " . $_SESSION['user_name'];







include ('./connect.php');


if (isset($_POST['submit'])) {

    $username = $_POST['username'];
    $mobile = $_POST['mobile'];
    $image = $_FILES['file'];


    $file_imagename = $image['name'];
    $file_temp = $image['tmp_name'];

    $file_separate = explode('.', $file_imagename);



    $file_extension = strtolower(end($file_separate));

    $extension = array('jpg', 'jpeg', 'png');

    if (in_array($file_extension, $extension)) {

        $upload_image = 'images/' . $file_imagename;
        move_uploaded_file($file_temp, $upload_image);

        $sql = "insert into `registration` (name,mobile,image) values ('$username',' $mobile' ,'$upload_image') ";

        $result = mysqli_query($con, $sql);

        if (!$result) {

            echo "date not inserted ";


        }


    }











}


?>;



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        img {

            width: 100px;
        }
    </style>
</head>

<body>
    <h1 class="text-center my-3">Display Data</h1>

    <div class="container d-flex justify-content-center">
        <table class="table table-bordered-dark">
            <thead>
                <tr>
                    <th scope="col">Sno</th>
                    <th scope="col">Name</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">image</th>
                </tr>
            </thead>
            <tbody>

                <?php

                $userprofile = $_SESSION['user_name'];

                if ($userprofile == true) {



                } else {

                    header('location:login.php');

                }

                $sql = "select * from `registration`    ";

                $result = mysqli_query($con, $sql);

                // $row=mysqli_fetch_assoc($result);
                

                if ($row = mysqli_fetch_assoc($result)) {

                    $id = $row['id'];
                    $name = $row['name'];
                    $mobile = $row['mobile'];
                    $image = $row['image'];


                    echo '<tr>
     
    <td>' . $id . '</td>
    <td>' . $name . '</td>
    <td>' . $mobile . '</td>
    <td><img src=' . $image . ' /></td>
  </tr>';


                }



                ?>


            </tbody>
        </table>






    </div>



</body>
<div class="div d-flex justify-content-center">
    <a href="logout.php"> <input type="submit" name="" id="" value="logout" class="btn btn-warning"></a>
</div>

</html>
