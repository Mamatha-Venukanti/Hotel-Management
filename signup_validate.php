<?php
require_once 'db_connection.php';
require_once 'constants.php';
$name= $_POST['name'];
$emailaddress= $_POST['emailaddress'];
$phone= $_POST['phone'];
$photo= $_POST['photo'];
$address= $_POST['address'];
$pincode= $_POST['pincode'];
$dob= $_POST['dob'];
$password= $_POST['password'];
$isverified= $_POST['isverified'];
if($password==$isverified){
    if(strlen($name)>0 && strlen($emailaddress)>0 && strlen($phone)>0 && strlen($address)>0 && strlen($pincode)>0 && strlen($password)>0 && strlen($isverified)>0){
        $select="SELECT * FROM login_table WHERE emailaddress='$emailaddress'";
        $getUser=mysqli_query($conn,$select);
        if(mysqli_num_rows($getUser)==1){
            echo "<script>alert('already registered');$go_back</script>";
        }
        else{
            $encrypted = password_hash($password,PASSWORD_BCRYPT);
            $insert = "INSERT INTO login_table (name,emailaddress,phone,photo,address,pincode,dob,password,isverified)
                        VALUES ('$name','$emailaddress','$phone','$photo','$address','$pincode','$dob','$password','$isverified')";
            $insertUser = mysqli_query($conn,$insert);
            if($insertUser){
                echo "<script>alert('Registered Successfully!');window.location.href='index.php';</script>";
            } else{
                echo "<script>alert('Something went wrong!');</script>";
            }
        }
    }
    else{
        echo "<script>alert('please fill all the mandatory fields')</script>";
    }
}
else{
    echo "<script>alert('passwords are not matching');</script>";
}
?> 