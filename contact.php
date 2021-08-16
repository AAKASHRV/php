<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/contact.css">
</head>
<body>
<?php
    include 'includes/header.php';
    ?>    
    <div class="form">
    <form action="submit.php">
        <lable>&ensp;&ensp;Name:&ensp;&ensp;</lable>
        <input type=text placeholder="enter your name" id=name><br>
        <lable>Phone no:</lable>
        <input type=text placeholder="enter your number" id=number><br>
        <lable>&ensp;&ensp;Mail id:&ensp;&ensp;</lable>
        <input type=mail placeholder="enter your mail id" id=name><br>
        <textarea id="message" name="message" rows="6" cols="30" maxlength="3000" required></textarea><br>
        <input type=Submit value=Submit id=btn><br>
    </form>
</div>
</body>
</html>