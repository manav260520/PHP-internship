<?php
$connection = mysqli_connect("localhost","root" ,"","db_internship");
if($_POST){
    $name = $_POST['txt1'];
    $gender = $_POST['txt2'];
    $dob = $_POST['txt3'];
    $email = $_POST['txt4'];
    $mobile = $_POST['txt5'];
    $address = $_POST['txt6'];
    $passwd = $_POST['txt7'];
    $pincode = $_POST['txt8'];
    $bloodgrp = $_POST['txt9'];
    
    
    $q = mysqli_query($connection, "insert into tbl_student(st_name,st_gender,st_email,st_mobile,"
            . "st_address,st_passwd,st_pincode,st_bloodgrp,st_dob)"
            . "values('{$name}','{$gender}','{$email}','{$mobile}',"
            . "'{$address}','{$passwd}','{$pincode}','{$bloodgrp}','{$dob}')") 
        or die("Error". mysqli_error($connection));
            
            If($q){
        echo "<script>alert('Record Added');</script>";
    }
}
?>

<html>
    <body>
        <form method="post">
            Name : <input type="text" name="txt1" required=""/></br>
            Gender : <select name="txt2">
                <option>Male</option>
                <option>Female</option>
            </select required=""></br>
            Date of birth : <input type="date" name="txt3" required=""/></br>
            Email : <input type="email" name="txt4" required=""/></br>
            Mobile Number : <input type="tel" name="txt5" pattern="[6789][0-9]{9}" required="h"/>
            </br>Address : <input type="text" name="txt6" required=""/></br>
            Password : <input type="password" name="txt7" minlength="8" required=""/></br>
            Pincode : <input type="tel" name="txt8" pattern="[0-9]{6}" required="k"/></br>
            Bloodgroup : <select name="txt9">
                <option>A+</option>
                <option>A-</option>
                <option>AB+</option>
                <option>AB-</option>
                <option>O+</option>
                <option>O-</option>
            </select required=""></br>
            <input type="submit"/>
            <input type="reset"/>
        </form>
    </body>
</html>

<a href='display.php'>Display Record</a>