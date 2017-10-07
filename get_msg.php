<?php
require('connect.php');
$query = $connect->query("
SELECT 
messages.id_membre,
messages.message_membre,
membres.id_membre,
membres.pseudo_membre
FROM messages
INNER JOIN membres ON membres.id_membre = messages.id_membre
ORDER BY time DESC
");
$messages = array();
while($rows = $query->fetch())
{
    $messages[] = $rows;
}
foreach($messages as $message)
{
    ?>
        <a href="#"><?php echo $message['pseudo_membre']; ?></a>
    <?php
}
?>