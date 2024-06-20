<?php
include ("connection.php");
if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['pass']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $cpassword = mysqli_real_escape_string($conn, $_POST['password']);

    $sql = "select * from signup where username '$username'";
    $result = mysqli_query($conn, $sql);
    $count_user = mysqli_num_rows($result);


    $sql = "select * from signup where email '$email'";
    $result = mysqli_query($conn, $sql);
    $count_email = mysqli_num_rows($result);

    if ($count_user == 0 & $count_email == 0) {
        if($password==$cpassword){
            $hash = password_hash($PASSWORD_DEFAULT);
            $sql = "INSERT INTO signup(username,email,password) VALUES('$username', '$email', '$hash')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                header("Location: welcome.php");
            }
        }
        else{
            echo'<script>
            alert("passwrod do not match");
            window.location.href = "index.php";
            </script>';
        }

    }else{
        if($count_user){
            echo'<script>
            window.location.href="index.php";
            alert("username already existas!");
            </script>';
        }
        if ($count_email) {
            echo'<scrpit>
            window.location.href="index.php";
            alert("Email already existas!");
            </scrpit>';
        }
    }



}

?>