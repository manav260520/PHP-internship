<?php

$connection = mysqli_connect("localhost","root" ,"" ,"db_internship");

$q = mysqli_query($connection, "select * from tbl_student")  or die(mysqli_error($connection));

$row = mysqli_fetch_row($q);

print_r($row);

echo $row[0].$row[1].$row[2].$row[3];

$row = mysqli_fetch_array($q);
echo "<pre>";
print_r($row);

echo $row[0].$row[1].$row[2].$row[3];
echo $row['st_id'].$row['st_name'].$row['st_gender'].$row['st_email'].
        $row['st_mobile'].$row['st_address'].$row['st_passwd'].$row['st_pincode'].$row['st_bloodgrp'].$row['st_dob'];