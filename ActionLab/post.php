<?php
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HOW TO USE POST ACTION</title>
</head>

<body>
    <h1>
        HOW TO USE POST ACTION
    </h1>
    <form action="post.php" method="post">
        First Name: <input type="text" name="firstName"> </br>
        Last Name: <input type="text" name="lastName"> </br>
        <button type="submit">SHOW MY NAME</button>
    </form>
    <hr>
    My name is: <?php echo "$firstName $lastName"; ?>
</body>

</html> 