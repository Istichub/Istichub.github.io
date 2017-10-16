<?php
require('connect.php');
$query = $connect->query("
SELECT
messages.id_member,
messages.message_member,
membres.id_member,
membres.pseudo_member
FROM messages
INNER JOIN membres ON membres.id_member = messages.id_member
ORDER BY temps DESC
");

$messages = array();

while($rows = $query->fetch())
{
    $messages[] = $rows;
}

foreach($messages as $message)
{
    ?>
        <a href="#"><?php echo $message['pseudo_member']; ?></a>
        <p><?php echo $message['message_member']; ?></p>
    <?php
}
?>