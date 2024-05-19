<?php 
session_start();
session_destroy();
session_abort();

echo
"
    <script>
        alert('LOGGED OUT')
        window.location = '../login.php'
    </script>
    
    ";