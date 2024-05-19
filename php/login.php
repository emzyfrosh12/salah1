
<?php
session_start();
include('datab_connect.php');

$email = mysqli_escape_string($connect, $_POST['email']);
$pwd = mysqli_escape_string($connect, $_POST['password']);

$query = "SELECT * FROM users WHERE emaIl = '$email' AND password = '$pwd' LIMIT 1";
$get = mysqli_query($connect, $query);

$rows = mysqli_num_rows($get);

if($rows == 1){
    while($row = mysqli_fetch_assoc($get)){
        $_SESSION['id'] = $row['id'];
        $_SESSION['name'] = $row['name'];
        $_SESSION['emaIl'] = $row['emaIl'];


        

        
    }
    header('Location:../account.php');
}else{
    echo "
    
<script>
    alert('Failed, Invalid credentials')
    window.location = '../login.php';
</script>

";

exit;
}

if($get){
    header('Location: ../account.php');
}