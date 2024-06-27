<?php

include_once ('./operations.php');

?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>


    <h1 class="text-center my-3">Registration Form</h1>

    <div class="container d-flex justify-content-center">

        <form action="display.php" method="post" enctype="multipart/form-data">


            <!-- <div class="form-group my-3">

                <input type="text" class="form-control" placeholder="username" name="username">


            </div>

            <div class="form-group my-3">

                <input type="text" class="form-control" placeholder="password" name="password">


            </div> -->

            <?php inputFields("username", "username", "", "text") ?>
            <?php inputFields("mobile", "mobile", "", "text") ?>
            <?php inputFields("image", "file", "", "file") ?>
            <button class="btn btn-warning" name="submit" value="submit">submit</button>






        </form>






    </div>



</body>

</html>
