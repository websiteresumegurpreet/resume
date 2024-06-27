<?php

session_start();

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

    <h1 class="text-center my-3">Login</h1>
    <div class="container d-flex justify-content-center">

        <form action="#" method="post" class="w-50">



            <div class="form-group my-3 text-center">
                <input type="text" placeholder="username" name="username" class="my-3">
                <br>


                <input type="text" placeholder="password" name="password">

            </div>

            <div class="form-group my-3 text-center">
                <input type="submit" placeholder="submit" name="submit" class="btn btn-warning">

            </div>

            <div class="forgetpass text-center"><a href="#" class="link" onclick="message()">Forget Password</a> </div>
        </form>

    </div>

    <script>

        function message() {

            alert("Try again");
        }
    </script>
</body>

</html>

<?php

include ('./connectt.php');

if (isset($_POST['submit'])) {

    $username = $_POST['username'];
    $pwd = $_POST['password'];

    $sql = "select * from `demo1` where username='$username' && password= '$pwd' ";

    $result = mysqli_query($con, $sql);

    $total = mysqli_num_rows($result);

    if ($total == 1) {

        $_SESSION['user_name'] = $username;
        header('location:display.php');


    } else {

        echo "check username and password pls";

    }


}




?>
