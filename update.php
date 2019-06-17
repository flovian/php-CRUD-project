<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update page</title>
    <link rel="stylesheet" href="bootstrap/css/custom.css">
</head>
<body>
<div  class="form_class">
   <divclass="form_class">
       <form  action="updateprocess.php"method="post">
           <?php
           /**
            * Created by PhpStorm.
            * User: emobilis
            * Date: 6/12/19
            * Time: 6:30 PM
            */
           if(isset($_GET['id_yetu'])){
               $received_id=$_GET['id_yetu'];
               $received_name=$_GET['jina_yetu'];
               $received_email=$_GET['arafa_yetu'];
               $received_pass=$_GET['siri_yetu'];
           }

           ?>
           <input class="s_input" type="text"name="w"value="<?php echo $received_id;?>" hidden><br>
           <input class="s_input" type="text"name="x"value="<?php echo $received_name;?>" required><br>
           <input class="s_input" type="email"name="y"value="<?php echo $received_email;?>" required><br>
           <input class="s_input" type="text"name="z"value="<?php echo $received_pass;?>" required><br>
           <input class="input_btn" type="submit"name="btn_submit"value="update now"><br>

       </form>
   </div>
</div>
</body>
</html>
