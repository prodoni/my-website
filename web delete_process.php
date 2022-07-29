<?php
    unlink('data/'.$_POST['id']);
    header('Location: /연습.php');
?>