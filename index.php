<?php
if(isset($_POST['submit'])){

$name =$_POST['name'];
$email =$_POST['email'];
$remarks=$_POST['remarks'];


$host='localhost';
$user='root';
$pass='';
$dbname='mytutor';

$conn= mysqli_connect($host,$user,$pass,$dbname);

$sql="INSERT INTO Student(name,email,remarks) values ('$name','$email','$remarks')";

mysqli_query($conn,$sql);

}


?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>


</html><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jai Shree Ganesha</title>
</head>

<body background="green.png">

    <header>
        <table>

            <tr>

                <td> <img style="float: left;" width="300" src="resume.jpg" alt="Women">
                </td>
                <td>

                    <h1><i>Drew Barrymore</i></h1>
                    <P> ❤️ Engineer</P>
                    <nav>
                        <ul>
                            <li><a href="#education">Education</a></li>
                            <li><a href="#internship">Internship</a></li>
                            <li><a href="#billionarie">Billionarie</a></li>
                            <li><a href="#projects">Projects</a></li>




                        </ul>


                    </nav>


                </td>
            </tr>
        </table>


        <hr>
    </header>
    <main>
        <section id="education">
            <h2>education</h2>
            <table border="">
                <tr>
                    <th>Subject</th>
                    <th>Year</th>
                    <th>Passout</th>
                </tr>
                <tr>
                    <td> Physic </td>
                    <td>2005 <sup> th</sup> </td>
                    <td>Pass</td>
                </tr>


            </table>
        </section>
        <section id="internship">
            <h3>internship</h3>
            <p>Better learning</p>
            <p>Sr Manager</p>
            <ul>
                <li>Hughes</li>
                <li>Ericsson</li>
                <li>Zte</li>
            </ul>

        </section>
        <section id="billionarie">
            <h4>billionarie</h4>

            <ol>
                <li>Lot of Big hoouses</li>
                <li>Lot of Money anfd power</li>
                <li>Enjoying life with grace of god</li>

            </ol>

        </section>
        <section id="projects">
            <h5>projects</h5>
            <ol>
                <li>Mseva</li>
                <li>SWM</li>
                <li>Army</li>


            </ol>
        </section>
    </main>

    <h6>Contact Us</h6>
    <form action="#"   method="POST" >
        Name: <br> <input type="text" name="name"><br>
        email: <br><input type="text" name="email"><br>
        Remarks: <br><textarea cols="20" rows="4" name="remarks"></textarea><br><br>
         <br><input type="submit" name="submit"><br>
     
    </form>
  



    <a href="#">Back to Top</a>



</body>

</html>