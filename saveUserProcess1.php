<?php
/**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 6/11/19
 * Time: 6:16 PM
 */
if(isset($_POST['btn_submit']));{
    $inputedname=$_POST['x'];
    $inputedemail=$_POST['y'];
    $inputedpassword=$_POST['z'];
    // connect to the db
    $conn=mysqli_connect("localhost","root","","evening_system");
    //check if the connection was successful
    if(!$conn){
        echo "Connection failed";

    }else{
        //proceed to save the db
        //start by inserting the insert query
        $insertquery="INSERT INTO `Majina`(`id`, `jina`, `arafa`, `siri`) VALUES ('null','$inputedname','$inputedemail','$inputedpassword')";
//        check if the connect query is correct
        if (!$insertquery){
            echo "Error in the insert query";
        }else{
            //proceed to save the data
            $save=mysqli_query($conn,$insertquery);
            //check if the data was saved successfully
            if(!$save){
                echo "saving failed";
            }else{
                echo "Data was saved successfully";
                header('location:saveUser.php');
            }
        }
    }

}