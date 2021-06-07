<?php

$connection = mysqli_connect("localhost","root" ,"","db_internship");

if(!isset($_GET['id']) || empty($_GET['id'])){
    header("location:display.php");
}
$editid = $_GET['id'];

$editq = mysqli_query($connection,"select * from tbl_student where st_id='{$editid}'") or die(mysqli_error($connection));
$editdata = mysqli_fetch_array($editq);
//print_r($editdata);


if($_POST){
    $txt1 = $_POST['txt1'];
    $txt2 = $_POST['txt2'];
    $txt3 = $_POST['txt3'];
    $txt4 = $_POST['txt4'];
    $txt5 = $_POST['txt5'];
    $txt6 = $_POST['txt6'];
    $txt7 = $_POST['txt7'];
    $txt8 = $_POST['txt8'];
    $txt9 = $_POST['txt9'];
    
    $uq = mysqli_query($connection, "update tbl_student set st_name='{$txt1}',st_gender='{$txt2}',st_dob='{$txt3}'"
    . ",st_email='{$txt4}',st_mobile='{$txt5}',st_address='{$txt6}',st_passwd='{$txt7}'"
    . ",st_pincode='{$txt8}',st_bloodgrp='{$txt9}'"
    . "where st_id='{$editid}'") or die(mysqli_error($connection));
    if($uq){
        echo "<script>alert('Record Updated');window.location='display.php';</script>";
    }
}

?>

<html>
    <body>
        <form method="post">
            Name : <input type="text"  value="<?php echo $editdata['st_name']; ?>"  name="txt1" required=""/></br>
            Gender : Male<input type="radio" <?php if($editdata['st_gender']=="Male"){echo "checked";} ?> value="Male" name="txt2"/>
            Female<input type="radio" <?php if($editdata['st_gender']=="Female"){echo "checked";} ?> value="Female" name="txt2"/></br>
            Date of birth : <input type="date" value="<?php echo $editdata['st_dob']; ?>"  name="txt3" required=""/></br>
            Email : <input type="email" value="<?php echo $editdata['st_email']; ?>"  name="txt4" required=""/></br>
            Mobile Number : <input type="tel" name="txt5" value="<?php echo $editdata['st_mobile']; ?>"  pattern="[6789][0-9]{9}" required="h"/>
            </br>Address : <input type="text" value="<?php echo $editdata['st_address']; ?>"  name="txt6" required=""/></br>
            Password : <input type="password" value="<?php echo $editdata['st_passwd']; ?>"  name="txt7" minlength="8" required=""/></br>
            Pincode : <input type="tel" value="<?php echo $editdata['st_pincode']; ?>"  name="txt8" pattern="[0-9]{6}" required="k"/></br>
            Bloodgroup : <select name="txt9" value="<?php echo $editdata['st_bloodgrp']; ?>" >
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


