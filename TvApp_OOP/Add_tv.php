<?php include 'header.php';



?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
<form class="form-inline" action="/action_page.php">
    <div class="form-group">
        <label for="">Tv Name:</label>
        <input type="name" class="form-control" id="name" placeholder="Enter Tv Name" name="name">
    </div>
    <br><br>
    <div class="form-group">
        <label for="pwd">Tv Number:</label>
        <input type="number" class="form-control" id="pwd" placeholder="Enter Tv number" name="num">
    </div>
    <br><br>
    <div class="form-group">
        <label for="pwd">TV Author:</label>
        <input type="name" class="form-control" id="pwd" placeholder="Enter Author" name="auth">
    </div>

    <button type="submit" class="btn btn-default" name="add">ADD</button>
</form>
</div>
</body>
</html>
