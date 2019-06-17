<?php
/**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 6/12/19
 * Time: 5:41 PM
 */
if (isset($_GET['id_yetu'])){
    $received_id=$_GET['id_yetu'];
//    connect to the db to delete a record under the received id row
    $conn=mysqli_connect("localhost","root","","evening_system");
//    check if the connection is successful
    if(!$conn){
        echo "connection failed!";
    }else{
//        proceed to delete
//        start to delete
        $deletequery="DELETE FROM Majina WHERE id=$received_id";
//        check if the delete query is correct
        if(!$deletequery){
            echo "error on the delete query";
        }else{
//            finally proceed to delete
            $delete=mysqli_query($conn,$deletequery);
//            check if the delete was successful
            if (!$delete){
                echo "Deleting failed!";
            }else{
                echo "Record deleted successfully";
//                go back to viewUsers.php to see if the file is gone
                header('location:viewUsers.php');
            }

            }
        }


}
?>

