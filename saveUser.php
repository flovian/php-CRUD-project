<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
    <link rel="stylesheet" href="bootstrap/css/custom.css">
</head>
<body>
<div class="form_class">
    <form action="saveUserProcess1.php"method="post">
        <input class="s_input" type="name"placeholder="name here"name="x"required><br>
        <input class="s_input" type="email"placeholder="email here"name="y"required><br>
        <input class="s_input" type="password"placeholder="password here"name="z"required><br>
        <input class="input_btn" type="submit"value="save"name="btn_save"><br>
        <a class="a_link" href="viewUsers.php">viewusers</a><br>

    </form>
</div>
</body>
</html>