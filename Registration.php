<?php

$flag=0;
if(empty($_POST['fname'])){echo "First Name is empty <br>"; $flag=1;}
if(empty($_POST['lname'])){echo "Last Name is empty <br>"; $flag=1;}
if(empty($_POST['gender'])){echo "Gender is not selected <br>"; $flag=1;}
if(empty($_POST['email'])){echo "Email is empty <br>"; $flag=1;}
if(empty($_POST['mob'])){echo "Mobile No is empty <br>"; $flag=1;}
if(empty($_POST['address'])){echo "Address is empty <br>"; $flag=1;}
if(empty($_POST['country'])){echo "Country is empty <br>"; $flag=1;}
if($flag==0){echo "Form is submitted";}
?><?php

$flag=0;
if(empty($_POST['fname'])){echo "First Name is empty <br>"; $flag=1;}
if(empty($_POST['lname'])){echo "Last Name is empty <br>"; $flag=1;}
if(empty($_POST['gender'])){echo "Gender is not selected <br>"; $flag=1;}
if(empty($_POST['email'])){echo "Email is empty <br>"; $flag=1;}
if(empty($_POST['mob'])){echo "Mobile No is empty <br>"; $flag=1;}
if(empty($_POST['address'])){echo "Address is empty <br>"; $flag=1;}
if(empty($_POST['country'])){echo "Country is empty <br>"; $flag=1;}
if($flag==0){echo "Form is submitted";}
?>