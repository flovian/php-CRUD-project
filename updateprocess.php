<?php
/**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 6/12/19
 * Time: 6:43 PM
 */
if (isset($_POST['btn_submit'])){

    $received_id=$_POST['w'];
    $received_name=$_POST['x'];
    $received_email=$_POST['y'];
    $received_pass=$_POST['z'];
//    To update ,connect to the db
    $conn=mysqli_connect("localhost","root","","evening_system");
//    check if the connection is successful
    if(!$conn){
        echo "connection failed";
    }else{
//        proceed to update data
//        start by creating update query
        $updatequery="UPDATE Majina SET jina='$received_name',arafa='$received_email',siri='$received_pass' WHERE  id='$received_id'";
//        Check if the update query is correct
        if(!$updatequery){
            echo "Error on update query";

        }else{
//            proceed to finally update
            $update=mysqli_query($conn,$updatequery);
//            check if the update was successful
            if (!$update){
                echo "Updating Failed";
            }else{
                echo "Record updated successfully";
//                go back to viewUsers.php to see changes
                header('location:viewUsers.php');
            }
        }
    }
}