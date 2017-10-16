<?php
session_start();
if(isset($_GET['id_member']))
{
    $_SESSION['id_member'] = (int)$_GET['id_member'];
}
else
{
    $_SESSION['id_member'] = '0';
}

?>
<html>
    <head>
    <title>Discussion instantanée</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
        
    </head>
    
    <body>
        <div class="chat">
            <div class="messages"></div>
            <textarea class="enter"></textarea>
            <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
            <script src="istic.js"></script>
            <link rel="stylesheet" href="css/bootstrap.css">
        </div>
    
    </body>
</html>
