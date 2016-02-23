<?php
$id = $_POST['id'];
try {
$bdd = new PDO('mysql:host=localhost;dbname=test', 'root', '');
} catch(Exception $e) {
exit('Unable to connect to database.');
}
$sql = "DELETE from event WHERE id=".$id;
$q = $bdd->prepare($sql);
$q->execute();
?>
