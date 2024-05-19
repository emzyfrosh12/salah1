<?php
include ("datab_connect.php");
session_start();


$name = uniqid().$_FILES['image']['name'];
$tmp = $_FILES['image']['tmp_name'];


$result = move_uploaded_file($tmp, '../images/'.$name);


if (empty($tmp)){
    echo
    "
    <script>
        alert ('FAILED, upload an image ')
        window.location = '../account.php';
    </script>
    
    ";

exit();

}

if($result){
    echo
    "
    <script>
        window.location = '../account.php';
    </script>
    
    ";
}
else { echo
    "
    <script>
        alert ('image failed to upload')
        window.location = '../account.php');
    </script>
    
    ";}
  $time = date("h.i");
  $date = date("d-m.y");
$date_time = "$date $time";

$idme = $_SESSION['id'];

$query ="INSERT INTO user_photo(user_id,name,reg_date) VALUES('$idme','$name','$date_time')";
$insert_user = mysqli_query($connect,$query)||mysqli_error($connect);
// if($insert_user){
//     echo
//     "
// <script>
//     alert ('image inserted)
//     window.location = '../account.php');
// </script>

// ";

// }

