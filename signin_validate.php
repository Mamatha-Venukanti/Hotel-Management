<?php
require_once 'db_connection.php';
require_once 'constants.php';
$emailaddress= $_POST['emailaddress'];
$password= $_POST['password'];
if(strlen($emailaddress)>0 && strlen($password)>0){
    $select = "SELECT * FROM login_table WHERE emailaddress='$emailaddress'";
    $getUser = mysqli_query($conn,$select);
    if(mysqli_num_rows($getUser)==1){
        while($row=mysqli_fetch_array($getUser)){
            $encrypted = $row['password'];
            $decrypted = password_verify($password,$encrypted);
            if($decrypted){
                echo "Logged in successfully!";
                session_start();
                $_SESSION['username']=$emailaddress;
                header($dashboard);
            } else{
                echo "<script>alert('Wrong email/password');$go_back</script>";
            }
        }
    }
} else{
    echo "<script>alert('Please fill all the mandatory fields');$go_back</script>";
}
?>
