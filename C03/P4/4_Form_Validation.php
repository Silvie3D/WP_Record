<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="4_Form_Validation.php" method="post">
        <label for="name">User name</label>
        <input type="text" name="name">
        <label for="name">Email</label>
        <input type="text" name="email">
        <label for="name">Password</label>
        <input type="password" name="password">
        <label for="name">Confirm Password</label>
        <input type="password" name="co_pass">
        <input type="submit" value="Submit">
    </form>
</body>
</html>

<?php
 $name=isset($_POST['name'])?$_POST['name']:"";
 $email=isset($_POST['email'])?$_POST['email']:"";
 $pass=isset($_POST['password'])?$_POST['password']:"";
 $co_pass=isset($_POST['co_pass'])?$_POST['co_pass']:"";

 if($name==""){
    echo"<script>alert('please fill username')</script>";
 }
 if ($email=="") {
     echo"<script>alert('please fill email')</script>";
 }
 if ($pass=="") {
    echo"<script>alert('please fill password')</script>";
 }
 if ($co_pass=="") {
    echo"<script>alert('please fill confirm password')</script>";
 }
 
 if ($pass!=$co_pass) {
    echo"<script>alert('password doesn't match')</script>";
 }