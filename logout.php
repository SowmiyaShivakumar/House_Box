<?php
if(!isset($_SESSION)){
    session_start();
}
    session_unset();
    session_destroy();
    
    echo "
   <script>
        alert('Thank you for Visiting. Give us your feedback');
        window.location.href='feedback.php'
    </script>";

?>