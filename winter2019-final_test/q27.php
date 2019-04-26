<?php

if($_POST) 
{
    $comment_data = $_POST['comment'];
    
    // $comment_data should be an associative array with all the submitted information
    var_dump($comment_data);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Question 28</title>
</head>
<body>


<form action="" method="POST">
    <input type="text" name="name" placeholder="name">
    <textarea name="textarea">
    <input type="file" name="file">
    <input type="submit" name="submit" value="Click">
</form>

</body>
</html>