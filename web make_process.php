<?php
file_put_contents('data/'.$_POST['title'], $_POST['contents']);
header('Location: /연습.php?id='.$_POST['title']);
?>