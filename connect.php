<?php
try
{
 $Connect = new PDO('mysql:host=localhost;dbname:Tchatfast','root',''); 
}
catch(Exception $e)
{
    die('Impossible de se connectée!'.$e->getMessage());
}
?>