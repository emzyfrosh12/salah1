<?php
include ("datab_connect.php");

$id = $_GET['id'];


$query = "DELETE FROM user_photo WHERE id = '$id'";
$result = mysqli_query($connect,$query);

if($result) {
    echo '
    <script>
    alert("User successfully deleted")
        window.location = "../account.php";

</script>

    ';
}