<?php
header("Content-type: text/html; charset=utf-8");
require_once('connect.php');
require_once('functions.php');


if(!empty($_POST)) {
    saveMess();
    header("Location: {$_SERVER['PHP_SELF']}");
    exit;
}

$messages = getMess();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guest book</title>
</head>
<body>
    
    <form action="" method="POST"> 
        <p> 
            <label for="name"> name:</label><br>
            <input type="text" name="name" id="name">
        </p>
        <p>
            <label for="text"> Text:</label><br>
            <textarea type="text" name="text"></textarea> 
        </p>
        <button type="submit">Send</button>
     </form>

     <hr>

     <?php if(!empty($messages)): ?>
         <?php foreach ($messages as $message): ?>
            <div class="messages">
                <p>Author:<?php echo $message['name'];?> | Date: <?php echo $message['date'] ?></p>
                    <div>
                        <p> Message: <?php echo nl2br(htmlspecialchars($message['text'])); ?></p>
                    </div>
                </div>
        <?php endforeach ?>
    <?php endif ?>
             
    

</body>
</html>
