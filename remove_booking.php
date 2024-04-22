
<?php
include('connect.php');
 if(isset($_POST['remove'])){
    session_start();
    echo "Remove";
    $id = $_POST['hid'];
    $update = "Update housesnew set BookingStatus=true where ID = $id";
    $new_update = mysqli_query($conn,$update);
    $delete = "Delete from my_bookings where User_ID = {$_SESSION['UserID']} and House_ID={$_POST['hid']}";
    $new_delete = mysqli_query($conn,$delete);
    echo "
    <script>
    window.location.href='my_bookings.php';
    </script>
    ";
}
?>