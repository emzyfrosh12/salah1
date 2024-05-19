<?php

include('datab_connect.php');

$id = $_SESSION['id'];

$query = "SELECT * FROM user_photo WHERE user_id = '$id'";
$result = mysqli_query($connect, $query);

if (mysqli_num_rows($result) > 0) {

    while ($row = mysqli_fetch_assoc($result)) {
        echo '
       <div class ="row">
          <div class ="col-md-9 border-radius">
            <img class = "mt-5" style="width: 250px;" src="images/' . $row['name'] . '" alt="picture">
          </div>

          <div class ="col-md-3 mt-5">
            <p class="mt-5">' . $row['reg_date'] . '</p>
            <a href="php/delete.php?id=' . $row['id'] . '" class="btn btn-danger btn-sm">Delete</a>

          </div>

          <div class ="col-md-3 mt-3">
          </div>
        </div>

       ';
    }
} else {
    echo '
<h1 class="text-danger">NO USERS</h1>

';
}
